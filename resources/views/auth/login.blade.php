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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_login_css() !!}
@endsection

@section('scripts')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_login_js() !!}
@endsection