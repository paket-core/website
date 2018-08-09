@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/'?>
    <?php $back = '/'; ?>
    <div class="page-content auth-content">
        @include('partials.header')
        <div class="auth-page login-page">
            <div class="row">
                <div class="section section-left animated fadeInLeft">
                    <div class="row details">
                        <div class="col-md-10 col-md-offset-2">
                            <a href="/">
                            </a>
                            <h2 class="auth-title">@lang('auth.forgotten_password_title')</h2>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <a href="/home" class="close-link animated-hover">
                                <p>@lang('auth.back')</p></a>
                        </div>
                    </div>
                </div>
                <div class="section section-right animated fadeInRight">
                    <div class="col-md-9">
                        <div class="form-wrapper">
                            <div id="successMessage" class="message message-success hidden">
                                @lang('auth.forgotten_message')
                            </div>

                            {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_reset_password_form($token) !!}

                            <button class="btn btn-blue-dark form-button reset-password-form-btn">
                                @lang('auth.reset_button')
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/animate/css/animate.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_forgotten_password_css() !!}
@endsection

@section('scripts')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_forgotten_password_js() !!}
@endsection