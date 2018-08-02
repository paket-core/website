@extends('layouts.app', [
    'custom_meta' => true
])

@section('custom_meta')
<meta property="og:description" content="{{trans('meta.developers_og_description')}}"/>
@endsection

@section('content')
    <?php $path = App::getLocale() === 'en' ? '/' : '/' . App::getLocale()?>
    <div class="page-content developers-page">
        @include('partials.header')
        @include('developers.developers_top_section')
        @include('developers.developers_down_section')
        @include('developers.developers_desc')
        @include('partials.footer')
        @include('modals.video')
    </div>
@endsection

@section('styles')
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_css() !!}
@endsection

@section('scripts')
    <script data-cfasync="false" src="/plugins/smooth-scroll.min.js"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_js() !!}
@endsection