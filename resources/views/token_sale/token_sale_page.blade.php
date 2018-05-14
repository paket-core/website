@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/'?>
    <div class="page-content token-page">
        @include('partials.header')
        @include('token_sale.token_top_section')
        @include('token_sale.token_bonus')
        @include('token_sale.token_eth_address')
        @include('token_sale.token_exchange_rates')
        @include('token_sale.token_plan')
        {{--@include('partials.contact_us')--}}
        @include('token_sale.team')
        @include('token_sale.token_join_social')
        @include('partials.footer')
        @include('auth.login_template', [
            'back_button' => true
        ])
        @include('auth.join_template',  [
            'back_button' => true
        ])
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css"
          integrity="sha384-HIipfSYbpCkh5/1V87AWAeR5SUrNiewznrUrtNz1ux4uneLhsAKzv/0FnMbj3m6g" crossorigin="anonymous">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_css() !!}
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"
            integrity="sha384-xMX6VHK1HYyCMM8zHAVkLHgg2rIDhN01+z4rI70RV2dwzzVlHP95uaDOc5ds7Pow"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"
            integrity="sha384-wY5mZB78h34xgHx+XQJ3oDUnPd94gz2cg5QpoOVQo0KQ+2EWVieu1QdsNhZb5GEV"
            crossorigin="anonymous"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}
@endsection