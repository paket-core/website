@extends('ico-template::layouts.modal_simple', [
'id' => 'referralDeleteModal',
'title' => trans('ico-template::home.referral_delete_code_modal'),
'close_modal' => false,
'cl' => 'big modal-join'
]
)

@section('modal_body')
    <div class="row">
        <div class="col-md-10">
            <div class="message message-red">
                @lang('ico-template::home.delete_referral_modal_confirmations')
            </div>
        </div>
    </div>
@overwrite

@section('modal_buttons')
    <button class="btn btn-red sending-hide" id="deleteReferralButton">@lang('ico-template::home.button_delete_referral')</button>
    <button class="btn btn-blue sending-show">@lang('ico-template::home.button_sending')</button>
@overwrite