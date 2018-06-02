<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    @if (isset($custom_meta) && $custom_meta)
        @yield('custom_meta')
    @else
        <title>{{isset($title) ? $title : env('APP_NAME')}}</title>
        <meta content="{{env('APP_NAME')}}" name="title"/>
        <meta content="" name="description"/>
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:url" content="{{URL::to('/')}}"/>
    @endif
    <meta property="fb:app_id" content="1680572791984199"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:secure_url" content=""/>
    <meta property="og:image:width" content="869"/>
    <meta property="og:image:height" content="509"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_website" content="{{URL::to('/')}}"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="{{ mix('css/app.css')}}" rel="stylesheet" type="text/css"/>
    @yield('styles')

</head>
<body>
<div class="page">
    @yield('content')
</div>

<script data-cfasync="false" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        integrity="sha384-bPV3mA2eo3edoq56VzcPBmG1N1QVUfjYMxVIJPPzyFJyFZ8GFfN7Npt06Zr23qts"
        crossorigin="anonymous"></script>

<script data-cfasync="false" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script data-cfasync="false" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@yield('scripts')

<script data-cfasync="false" type="text/javascript" src="{{ mix('js/app.js')}}"></script>

<script data-cfasync="false" src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
        integrity="sha384-pvXSwSU09c+q9mPyY++ygUHWIYRoaxgnJ/JC5wcOzMb/NVVu+IDniiB9qWp3ZNWM"
        crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116534685-1"></script>--}}
{{--<script>--}}
{{--window.dataLayer = window.dataLayer || [];--}}
{{--function gtag(){dataLayer.push(arguments);}--}}
{{--gtag('js', new Date());--}}

{{--gtag('config', 'UA-116534685-1');--}}
{{--</script>--}}

<script>
    WebFont.load({
        google: {
            families: ['Open Sans:regular:cyrillic', 'Roboto']
        },
        custom: {
            families: ['Proxima Nova', 'icomoon'],
            urls: ['{{mix('/fonts/fonts.css')}}']
        },
        fontloading: function (familyName, fvd) {
            if (familyName === 'icomoon') {
                $('.fa-svg').addClass('visible');
            }
        }
    });
</script>

@if (env('APP_ENV') === 'local')
    <script type='text/javascript'>
        //some default pre init
        var Countly = Countly || {};
        Countly.q = Countly.q || [];

        //provide countly initialization parameters
        Countly.app_key = 'b442c665697cc1996665ebeee2a35e649c156ec3';
        Countly.url = 'https://c.paket.global/';

        Countly.q.push(['track_sessions']);
        Countly.q.push(['track_pageview']);
        Countly.q.push(['track_clicks']);
        Countly.q.push(['track_scrolls']);
        Countly.q.push(['track_errors']);
        Countly.q.push(['track_links']);
        Countly.q.push(['track_forms']);
        Countly.q.push(['collect_from_forms']);

        //load countly script asynchronously
        (function () {
            var cly = document.createElement('script');
            cly.type = 'text/javascript';
            cly.async = true;
            //enter url of script here
            cly.src = 'https://cdnjs.cloudflare.com/ajax/libs/countly-sdk-web/18.1.0/countly.min.js';
            cly.onload = function () {
                Countly.init()
            };
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(cly, s);
        })();
    </script>
@endif

</body>
</html>