@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/'?>
    <div class="page-content auth-content">
        @include('partials.header')
        @include('auth.login_template')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/animate/css/animate.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_login_css() !!}
@endsection

@section('scripts')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_login_js() !!}
@endsection