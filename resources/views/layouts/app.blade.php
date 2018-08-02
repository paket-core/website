<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{isset($title) ? $title : trans('meta.title')}}</title>
    <meta charset="utf-8"/>
    <meta content="{{trans('meta.title')}}" name="title"/>
    <meta content="{{trans('meta.description')}}" name="description"/>
    <meta property="og:url" content="{{env('APP_URL')}}"/>
    <meta property="og:title" content="{{trans('meta.og_title')}}"/>
@if (isset($custom_meta) && $custom_meta)
    @yield('custom_meta')
@else
    <meta property="og:description" content="{{trans('meta.og_description')}}"/>
@endif
    <meta property="fb:app_id" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://paket.global/images/og/paket.jpg"/>
    <meta property="og:image:secure_url" content="https://paket.global/images/og/paket.jpg"/>
    <meta property="og:image:width" content="689"/>
    <meta property="og:image:height" content="388"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta content="" name="author"/>
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta name="_website" content="{{env('APP_URL')}}"/>
    <meta name="msappl\ication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">

    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

    <link href="{{ mix('css/app.css')}}" rel="stylesheet" type="text/css"/>
    @yield('styles')

</head>
<body>
<div class="page">
    @yield('content')
</div>

<script src="/plugins/jquery/js/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>

<script data-cfasync="false" src="/plugins/bootstrap/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@yield('scripts')

@if (env('APP_ENV') !== 'local')
    <script src="/plugins/raven/js/raven.min.js"
            integrity="sha384-uJpQSthHz+xMxNKkViI4LAy8DBoNDjeaE06Ga+fIE7GJ0KB2ElxHk5q5ED9Z6+jZ"
            crossorigin="anonymous"></script>
@endif
<div class="hidden" id="fontPath" data-font-path="{{mix('/fonts/fonts.css')}}"></div>
<div class="hidden" id="appEnv" data-env="{{env('APP_ENV')}}"></div>

<script src="/plugins/webfontloader.js"></script>

<script data-cfasync="false" type="text/javascript" src="{{ mix('js/app.js')}}"></script>

</body>
</html>