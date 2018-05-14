var LoginPageEmbedded = (function () {

    var DocumentModalManager = require('./_DocumentModalManager');

    function init() {

        $('.login-click').click(function () {
            $('.login-page').addClass('visible')
        });

        $('.join-click').click(function () {
            $('.join-page').addClass('visible')
        });

        $('.menu, .auth-page').find('.close-link').click(function () {
            var section = $(this).parents('.auth-page');
            section.find('.section-right').removeClass('fadeInRight').addClass('fadeOutRight');
            section.find('.section-left').removeClass('fadeInLeft').addClass('fadeOutLeft');
            setTimeout(function () {
                section.removeClass('visible');
                section.find('.section-right').addClass('fadeInRight').removeClass('fadeOutRight');
                section.find('.section-left').addClass('fadeInLeft').removeClass('fadeOutLeft');
            }, 1000);
        });

        DocumentModalManager.init();
    }

    return {
        init: init
    }
})();

module.exports = LoginPageEmbedded;