@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/'?>
    <div class="page-content header-dark referral-dashboard">
        @include('partials.header')
        <div class="my-account top">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#my-referrals" data-toggle="tab">@lang('client_panel.tab_my_referrals')</a>
                        </li>
                        <li>
                            <a href="#my-codes" data-toggle="tab">@lang('client_panel.tab_my_codes')</a>
                        </li>
                        <li>
                            <a href="#invitations" data-toggle="tab">@lang('client_panel.tab_invitations')</a>
                        </li>
                        <li>
                            <a href="#change-password" data-toggle="tab">@lang('client_panel.tab_change_password')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-account down">
            <div class="container">
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="my-referrals">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="row">
                                {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_chart_portlet()!!}
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-2">
                            <div class="row">
                                {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_chart_statistics()!!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="my-codes">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="row">
                                {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_codes_portlet()!!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="invitations">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="row">
                                {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_invitations_portlet()!!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="change-password">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <h2>@lang('client_panel.tab_change_password_title')</h2>
                                <div class="form-wrapper">
                                    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_change_password_form() !!}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-dark form-button change-password-form-btn">@lang('client_panel.change_password_button')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
        {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_modals() !!}
        {!! \TokenChef\IcoTemplate\Services\WidgetService::get_invitations_modals() !!}
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/animate/css/animate.min.css">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_dashboard_css() !!}
@endsection

@section('scripts')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_change_password_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_dashboard_js() !!}
    <script data-cfasync="false" src="/plugins/clipboard/js/clipboard.min.js"
            integrity="sha384-cV+rhyOuRHc9Ub/91rihWcGmMmCXDeksTtCihMupQHSsi8GIIRDG0ThDc3HGQFJ3"
            crossorigin="anonymous"></script>
@endsection