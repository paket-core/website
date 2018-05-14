/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

$(document).ready(function () {

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
});