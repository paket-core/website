@extends('ico-template::layouts.modal_simple', [
'id' => 'invitationCreateModal',
'title' => trans('ico-template::home.create_referral_invitation'),
'close_modal' => false,
'cl' => 'big modal-join'
]
)

@section('modal_body')
    <div class="form-wrapper send-invitation-wrapper">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="invitation-title">@lang('ico-template::home.invitation_desc')</p>
                <div id="invitationTemplate" class="hidden">
                    <form class="invitation-wrapper">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text"
                                           name="name"
                                           placeholder="@lang('ico-template::home.create_referral_invitation_name')">
                                    <label for="name" generated="true" class="error"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"
                                           name="email"
                                           placeholder="@lang('ico-template::home.create_referral_invitation_email')">
                                    <label for="email" generated="true" class="error"></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="invitationForm" class="form">

                </div>
            </div>
        </div>
    </div>
@overwrite

@section('modal_buttons')
    <button class="btn btn-blue sending-hide"
            id="addNewInvitationButton">@lang('ico-template::home.button_add_user')</button>
    <button class="btn btn-orange sending-hide"
            id="createInvitationButton">@lang('ico-template::home.button_send_invitations')</button>
    <button class="btn btn-purple sending-show">@lang('ico-template::home.button_sending')</button>
@overwrite