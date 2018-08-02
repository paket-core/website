@extends('layouts.app',[
    'custom_meta' => true
])

@section('custom_meta')
    <meta property="og:description" content="{{trans('meta.tokens_og_description')}}"/>
@endsection

@section('content')
    <?php $path = App::getLocale() === 'en' ? '/' : '/' . App::getLocale()?>
    <div class="page-content token-page">
        @include('partials.header')
        @include('tokens.tokens_top_section')
        @include('tokens.tokens_selling')
{{--        @include('tokens.tokens_price')--}}
        {{--@include('tokens.tokens_smart')--}}
{{--        @include('tokens.tokens_distribution')--}}
        {{--@include('tokens.tokens_funds')--}}
        @include('home.home_road_map')
        {{--@include('home.home_down_section')--}}
        @include('partials.footer')
        @include('auth.login_template', [
            'back_button' => true
        ])
        @include('auth.join_template',  [
            'back_button' => true
        ])
        @include('modals.video')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/owl/css/owl.carousel.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_css() !!}
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    <script data-cfasync="false" src="/plugins/owl/owl.carousel.min.js"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}
@endsection