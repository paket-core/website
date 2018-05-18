<?php $back = isset($back_button) && $back_button; ?>
<div class="auth-page login-page">
    <div class="row">
        <div class="section section-left animated fadeInLeft">
            <div class="row details">
                <div class="col-md-10 col-md-offset-2">
                    <a href="/">
                    </a>
                    <h2 class="auth-title">@lang('auth.login_title')</h2>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <a @if(!$back) href="{{route('home')}}" @endif class="close-link animated-hover">
                        <p>@lang('auth.back')</p></a>
                </div>
            </div>
        </div>
        <div class="section section-right animated fadeInRight">
            <div class="col-md-9">
                <div class="form-wrapper">
                    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_login_form() !!}
                    <a href="{{route('forgotten_password')}}"><p class="forgot-link">@lang('auth.forgot_link')</p></a>
                    <button class="btn login-button form-button login-form-btn loading-hide">@lang('auth.login_button')</button>
                    @include('partials.loading_button')
                </div>
            </div>
        </div>
    </div>
</div>