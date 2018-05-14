@extends('ico-template::layouts.modal_simple', [
'id' => 'referralCodeCreateModal',
'title' => trans('ico-template::home.create_referral_code'),
'close_modal' => false,
'cl' => 'big modal-join'
]
)

@section('modal_body')
    <div class="row referral-code-form">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-5 control-label">@lang('ico-template::home.referral_code_input')</label>

                <div class="col-md-6">
                    <input placeholder="@lang('ico-template::home.referral_code_input')" id="codeInput" type="text" class="form-control"
                           name="password" required>

                </div>
                <div class="col-md-1">
                    <i class="fa fa-refresh refresh-icon" id="refreshCodeButton"></i>
                </div>
            </div>
        </div>
    </div>
@overwrite

@section('modal_buttons')
    <button class="btn btn-dark sending-hide" id="createReferralButton">@lang('ico-template::home.button_create_referral_code')</button>
    <button class="btn btn-blue sending-show">@lang('ico-template::home.button_sending')</button>
@overwrite