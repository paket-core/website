@extends('ico-template::layouts.modal_simple', [
'id' => 'invitationDeleteModal',
'title' => trans('ico-template::home.invitation_delete'),
'close_modal' => false,
'cl' => 'big modal-join'
]
)

@section('modal_body')
    <div class="row">
        <div class="col-md-10">
            <div class="message message-red">
                @lang('ico-template::home.delete_invitation_modal_confirmations')
            </div>
        </div>
    </div>
@overwrite

@section('modal_buttons')
    <button class="btn btn-red sending-hide" id="deleteInvitationButton">@lang('ico-template::home.button_delete_invitation')</button>
    <button class="btn btn-purple sending-show">@lang('ico-template::home.button_sending')</button>
@overwrite