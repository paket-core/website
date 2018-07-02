<div class="form-group identification-file">
    <div class="row">
        <div class="col-md-12 file-wrapper">
            <div class="label">{{TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_label($user_field)}}</div>

            <div class="file-drop-area">
                <span class="fake-btn">@lang('ico-template::home.identification_choose')</span>
                <span class="file-msg js-set-number">@lang('ico-template::home.identification_drag')</span>
                <input class="file-input"
                       type="{{TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_kind($user_field)}}"
                       placeholder="{{TokenChef\IcoTemplate\Services\ICOSettingsService::get_field_placeholder($user_field)}}"
                       accept="image/*"
                       name="{{$user_field}}"/>
            </div>
            <label for="{{$user_field}}" class="error"></label>
        </div>
        <div class="col-md-12">
            <img src="/images/auth/sample_id_img.png">
        </div>
    </div>
</div>