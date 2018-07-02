<?php $kind = TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_kind($user_field); ?>
<?php $field = isset($field) ? $field : 'field' ?>
<div class="form-group">
    @if (isset($config['labels']) && $config['labels'])
        <div class="input-label">
            {!!TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_placeholder($user_field, isset($placeholder) ? $placeholder : null)!!}
        </div>
    @endif
    @if ($kind === 'checkbox')
        <div class="pretty-wrapper">
            <div class="pretty p-default">
                <input type="checkbox" name="{{$user_field}}" @if(isset($value) && $value) checked @endif>
                <div class="state p-primary">
                    <label for="{{$user_field}}"></label>
                </div>
            </div>
            <span>{!!  TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_placeholder($user_field, isset($placeholder) ? $placeholder : null) !!}</span>
        </div>
    @elseif($kind === \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_CAPTCHA)
        @include('ico-template::auth.recaptcha_field')
    @elseif ($kind === \TokenChef\IcoTemplate\Services\StaticArray::SELECT_COUNTRY_FIELD)
        @include('ico-template::auth.country_field')
    @else
        <input class="form-control"
               type="{{$kind}}"
               id="{{$user_field}}_{{$field}}"
               placeholder="{!!TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_placeholder($user_field, isset($placeholder) ? $placeholder : null)!!}"
               @if(isset($value) && $value!== null) value="{{$value}}" @endif
               name="{{$user_field}}"/>
        <label for="{{$user_field}}_{{$field}}" class="error"></label>
    @endif
</div>