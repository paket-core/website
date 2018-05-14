@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/' ?>
    <?php $lang_reload = true;?>
    <div class="page-content landing-page landing-page-{{App::getLocale()}}">
        @include('partials.header',[
            'token_sale' => true
        ])
        @include('home.home_bars')
        @include('home.home_top_section')
        @include('home.home_partners')
        @include('home.home_mining')
        @include('home.home_slider')
        @include('partials.factsheet')
        @include('home.home_diagram')
        @include('home.home_white_paper')
        @include('partials.subscribe')
        @include('home.home_team')
        @include('home.home_road_map')
        @include('partials.footer')
        @include('auth.login_template', [
            'back_button' => true
        ])
        @include('auth.join_template',  [
            'back_button' => true
        ])
    </div>
    <div class="home-modals">
        @include('home.home_map_modal')
        @include('home.home_unit_calculator_modal')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/plugins/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/owl/owl.theme.default.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_css() !!}
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    <script data-cfasync="false" src="/plugins/owl/owl.carousel.min.js"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}
@endsection