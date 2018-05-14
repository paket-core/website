<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\IcoField;

class ICOSettingsService
{

    /**
     * @param $group
     * @param $fields
     * @throws WebException
     */
    public static function store($group, $fields)
    {
        self::clear_group_settings($group);
        foreach ($fields as $key => $value) {
            self::store_setting($group, $key, $value);
        }
    }

    public static function get_company_name()
    {
        return env('APP_COMPANY_NAME', env('APP_NAME', 'Trilliant'));
    }

    public static function get_team_name()
    {
        return env('APP_TEAM_NAME', env('APP_COMPANY_NAME', 'Trilliant'));
    }

    public static function check_fiat_enabled()
    {
        return self::check_custom_field(StaticArray::CUSTOM_ICO_FIAT_ENABLED);
    }

    public static function use_generated_deposits()
    {
        return boolval(env('APP_GENERATED_DEPOSITS', false)) === true;
    }

    public static function get_field_kind($field)
    {
        if (in_array($field, [
            StaticArray::USER_FIELD_PASSWORD,
            StaticArray::USER_FIELD_CONFIRM_PASSWORD,
            StaticArray::USER_FIELD_OLD_PASSWORD,
            StaticArray::USER_FIELD_NEW_PASSWORD,
            StaticArray::USER_FIELD_CONFIRM_NEW_PASSWORD,
            StaticArray::USER_FIELD_VERIFICATION_PASSWORD,
            StaticArray::ICO_FIELD_RESET_PASSWORD,
            StaticArray::USER_FIELD_DEPOSIT_PASSWORD,
            StaticArray::USER_FIELD_DEPOSIT_PASSWORD_CONFIRMATION
        ])) {
            return 'password';
        } else if (in_array($field, [
            StaticArray::USER_FIELD_IDENTIFICATION
        ])) {
            return 'file';
        } else if (in_array($field, [
            StaticArray::USER_FIELD_TERMS_AND_CONDITIONS,
            StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT
        ])) {
            return 'checkbox';
        } else if ($field === StaticArray::USER_FIELD_COUNTRY) {
            return StaticArray::SELECT_COUNTRY_FIELD;
        } else if ($field === StaticArray::USER_FIELD_CAPTCHA) {
            return StaticArray::USER_FIELD_CAPTCHA;
        }
        return 'text';
    }

    public static function get_field_placeholder($user_field, $placeholder = null)
    {
        if ($placeholder) {
            return $placeholder;
        }
        if ($user_field === StaticArray::USER_FIELD_PHONE_NUMBER) {
            return null;
        } else if (in_array($user_field, [StaticArray::USER_FIELD_SUBSCRIPTION_AGREEMENT, StaticArray::USER_FIELD_TERMS_AND_CONDITIONS, StaticArray::USER_FIELD_PRIVACY_POLICY])) {
            return trans('ico-template::home.' . $user_field, [
                'LINK' => '<a class="accept-field-link" data-field-name="' . $user_field . '" data-url="' . self::get_link($user_field) . '">' . trans('ico-template::home.' . $user_field . '_link') . '</a>'
            ]);
        }
        return trans('ico-template::home.' . $user_field);
    }

    public static function get_link($user_field)
    {
        return StaticArray::DOCUMENT_LINKS[$user_field];
    }

    public static function get_field_label($user_field)
    {
        return trans('ico-template::home.' . $user_field);
    }

    public static function get_join_fields()
    {
        return self::get_fields(StaticArray::ICO_FIELD_KIND_JOIN);
    }

    public static function get_login_fields()
    {
        return [
            StaticArray::USER_FIELD_EMAIL,
            StaticArray::USER_FIELD_PASSWORD
        ];
    }

    public static function get_register_fields()
    {
        return self::get_fields(StaticArray::ICO_FIELD_KIND_REGISTER);
    }

    public static function get_forgotten_password_fields()
    {
        return [
            StaticArray::ICO_FIELD_FORGOTTEN_PASSWORD
        ];
    }

    public static function get_reset_password_fields()
    {
        return [
            StaticArray::ICO_FIELD_RESET_PASSWORD
        ];
    }

    public static function get_others_fields()
    {
        return self::get_fields(StaticArray::ICO_FIELD_KIND_OTHERS);
    }

    /**
     * @param $group
     * @param $name
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public static function get_field($group, $name)
    {
        return IcoField::whereIcoFieldKind($group)->whereIcoFieldName($name)->first();
    }

    /**
     * @param $name
     * @return \Illuminate\Database\Eloquent\Builder|IcoField
     *
     */
    protected static function check_custom_field($name)
    {
        return IcoField::whereIcoFieldKind(StaticArray::ICO_FIELD_KIND_OTHERS)->whereIcoFieldValue(StaticArray::ICO_FIELD_VALUE_REQUIRED)->whereIcoFieldName($name)->first();
    }

    /**
     * @param $kind
     * @return array
     */
    protected static function get_fields($kind)
    {
        return IcoField::whereIcoFieldKind($kind)->whereIcoFieldValue(StaticArray::ICO_FIELD_VALUE_REQUIRED)->get()->pluck('ico_field_name')->toArray();
    }

    /**
     * @param $group
     * @return bool|mixed|null
     */
    protected static function clear_group_settings($group)
    {
        return IcoField::whereIcoFieldKind($group)->delete();
    }

    /**
     * @param $group
     * @param $name
     * @param $value
     * @return IcoField|\Illuminate\Database\Eloquent\Model|null|static
     * @throws WebException
     */
    protected static function store_setting($group, $name, $value)
    {
        $field = self::get_field($group, $name);
        if (!$field) {
            $field = new IcoField();
            $field->ico_field_kind = $group;
            $field->ico_field_name = $name;
        }
        $value = GlobalService::get_boolean_value($value);
        $field->ico_field_value = $value ? StaticArray::ICO_FIELD_VALUE_REQUIRED : StaticArray::ICO_FIELD_VALUE_OPTIONAL;
        if (!$field->validate()) {
            throw new WebException($field->errors()->first());
        }
        if (!$field->save()) {
            throw new WebException(trans('store_settings_save_error'));
        }
        return $field;
    }
}