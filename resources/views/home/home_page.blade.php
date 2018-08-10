@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <div class="page-content token-page">
        @include('partials.header')
        @include('home.home_top_section')
        @include('home.home_media')
        @include('home.home_about')
        @include('home.home_project')
        @include('home.home_join')
        @include('home.home_ecosystem')
        @include('home.home_team')
        @include('home.home_endorsements')
        @include('home.home_road_map')
        @include('partials.footer')
        @include('modals.video')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/animate/css/animate.min.css">
    <link rel="stylesheet" href="/plugins/owl/css/owl.carousel.min.css">
    {{--{!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_css() !!}--}}
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    <script data-cfasync="false" src="/plugins/jquery.path.js"></script>
    <script data-cfasync="false" src="/plugins/owl/owl.carousel.min.js"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {{--{!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}--}}
@endsection