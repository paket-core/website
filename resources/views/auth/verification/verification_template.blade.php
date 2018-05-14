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
                            <h2 class="auth-title">@lang('auth.verification_form_title')</h2>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <a href="{{route('home')}}" class="close-link animated-hover">
                                <img src="/images/custom/icon/arrow_back.svg">
                                <p>@lang('auth.back')</p></a>
                        </div>
                    </div>
                </div>
                <div class="section section-right animated fadeInRight">
                    <div class="col-md-9">
                        <div class="form-wrapper">
                            <div id="successMessage" class="message message-success hidden verification-message">
                                @lang('auth.verification_form_message')
                                <a href="{{route('login')}}">
                                    <button class="btn btn-dark">
                                        @lang('auth.login_now')
                                    </button>
                                </a>
                            </div>

                            <div class="verification-form-wrapper">

                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referral_verification_form($code) !!}

                                <button class="btn btn-blue-dark form-button verification-form-btn">
                                    @lang('auth.verify_account')
                                </button>

                                @if (isset($referrals) && $referrals)
                                    <p class="auth-desc">@lang('auth.referral_verification_form_desc')</p>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_verification_css() !!}
@endsection

@section('scripts')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_verification_js() !!}
@endsection