/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

$(document).ready(function () {

    function run() {

        if ($('#appEnv').attr('data-env') !== 'local'){
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
        }

        WebFont.load({
            google: {
                families: ['Open Sans:regular:cyrillic', 'Roboto']
            },
            custom: {
                families: ['Proxima Nova', 'icomoon'],
                urls: [$('#fontPath').attr('data-font-path')]
            },
            fontloading: function (familyName, fvd) {
                if (familyName === 'icomoon') {
                    $('.fa-svg').addClass('visible');
                }
            }
        });

        var HomeManager = require('./_HomeManager');
        var TokenPageManager = require('./_TokenPageManager');
        var MyAccountManager = require('./_MyAccountManager');
        var AuthPageManager = require('./_AuthPageManager');
        var VerificationManager = require('./_VerificationManager');
        var ToastrManager = require('./_ToastrManager');
        var LanguageManager = require('./_LanguageManager');

        function stripQueryStringAndHashFromPath(url) {
            return url.split("?")[0].split("#")[0];
        }

        var fullUrl = stripQueryStringAndHashFromPath(window.location.href.replace(/^(?:\/\/|[^\/]+)*\//, ""));
        var url = fullUrl.toLowerCase();

        ToastrManager.init();
        LanguageManager.init();

        if (['en', 'de', 'es', 'fr', 'pt'].indexOf(url) >= 0) {
            HomeManager.init();
            return false;
        }

        switch (url) {
            case '':
                HomeManager.init();
                break;
            case 'token-sale':
                TokenPageManager.init();
                break;
            case 'developers':
                TokenPageManager.init();
                break;
            case 'my-account':
                MyAccountManager.init();
                break;
            case 'password':
                AuthPageManager.init();
                break;
            case 'login':
                AuthPageManager.init();
                break;
            case 'sign-up':
                AuthPageManager.init();
                break;
            case 'terms-and-conditions':
                AuthPageManager.init();
                break;
            case 'privacy-policy':
                AuthPageManager.init();
                break;
            default:
                if (url.substr(0, 15) === 'reset-password/') {
                    AuthPageManager.init();
                } else if (url.substr(0, 13) === 'verification/') {
                    AuthPageManager.init();
                    VerificationManager.init();
                }
                break;
        }
    }

    if (typeof(Raven) === 'undefined') {
        run();
    } else {
        Raven.config('https://6dfaa9dccdcb4a5783c91b96f79818e7@sentry.io/1219139').install();
        Raven.context(function () {
            run();
        });
    }
});