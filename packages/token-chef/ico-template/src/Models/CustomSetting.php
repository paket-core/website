<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * TokenChef\IcoTemplate\Models\CustomSetting
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $setting_name
 * @property string $setting_value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CustomSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CustomSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CustomSetting whereSettingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CustomSetting whereSettingValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\CustomSetting whereUpdatedAt($value)
 */
class CustomSetting extends ValidModel
{

    protected $fillable = [
        'setting_name',
        'setting_value'
    ];
}
