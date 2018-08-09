@extends('layouts.app', [
    'custom_meta' => true
])

@section('custom_meta')
    <meta property="og:description" content="{{trans('meta.map_og_description')}}"/>
@endsection

@section('content')
    <?php $path = App::getLocale() === 'en' ? '/' : '/' . App::getLocale()?>
    <div class="page-content map-page">
        @include('partials.header')
        @include('map.map_top_section')
        @include('map.map_down_section')
        @include('map.map_interactive_section')
        @include('partials.footer')
        @include('modals.video')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/leaflet/leaflet.css">
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    <script data-cfasync="false" src="/plugins/leaflet/leaflet.js"></script>
    <script data-cfasync="false" src="/plugins/leaflet/leaflet-ant-path.min.js"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {{--{!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}--}}
@endsection