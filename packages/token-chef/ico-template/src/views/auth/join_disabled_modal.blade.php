@extends('ico-template::layouts.modal', [
'id' => 'joinIcoModal',
'title' => isset($title) ? $title : trans('home.modal_join_token_sale'),
'close_modal' => false,
'cl' => 'big modal-join'
])

@section('modal_body')

    <div class="center">
        <div class="col-md-6">
            <img src="/images/time_to_invest.svg">
        </div>
        <div class="col-md-6">
            @include('ico-template::auth.message', [
                'message' => trans('ico-template::home.join_disabled')
            ])
        </div>
    </div>

@endsection

@section('modal_buttons')
    <button class="btn btn-orange join-form-btn">@lang('ico-template::home.register_account')</button>
@endsection