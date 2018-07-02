var LanguageManager = (function () {

    var FormManager = require('./_FormManager');

    function init() {
        enableMenu();
        detectLanguage();
        preload();
        fixMenuOnMobile();
    }

    function fixMenuOnMobile() {
        $('.navbar-nav li a').click(function () {
            if ($('.navbar-collapse').hasClass('collapse')) {
                $('.navbar-toggle').click();
            }
            enableScroll();
        })
    }

    $('.navbar-toggle').click(function () {
        if ($(this).hasClass('collapsed')) {
            disableScroll();
        } else {
            enableScroll();
        }
    });

    function disableScroll() {
        $("body").css("overflow", "hidden");
    }

    function enableScroll() {
        $("body").css("overflow", "auto");
    }

    function preload() {
        var images = $('.preload-lang-images');
        var version = 'sf32fl';

        images.each(function () {
            var imageObj = new Image();
            var lang = $(this).attr('data-lang');
            imageObj.src = '/images/flags_s/' + lang + '.png?' + version;
        });

    }

    function enableMenu() {
        var sel = $('.language-select-wrapper');
        var li = sel.find('li');

        sel.click(function () {
            $(this).toggleClass('open');
        });

        li.click(function () {
            li.removeClass('active');
            var language = $(this).toggleClass('active').attr('data-lang');
            setTimeout(function () {
                var reload = sel.attr('data-reload') === 'yes';
                changeLanguage(language, reload);
            })
        })
    }

    function changeLanguage(language, reload) {
        FormManager.sendPost('/token-chef/api/language', {
            lang: language
        }, function (response) {
            if (response.status === 'success') {
                if (reload) {
                    window.location.href = '/' + language
                } else {
                    window.location.reload()
                }
            }
        });
    }

    function detectLanguage() {
        var name = 'detected_language';
        var name_modal = 'detected_language_modal';
        var cookie = Cookies.get(name);
        if (!cookie) {
            FormManager.sendPost('/token-chef/api/language/detect', {}, function (response) {
                if (response.status === 'success') {
                    var data = response.data;
                    Cookies.set(name, data.detected, {expires: 7});
                    if (data.detected !== data.current) {
                        cookie = data.detected;
                        Cookies.set(name_modal, 'yes', {expires: 7});
                        showModal();
                    }
                }
            });
        } else {
            checkModal();
        }

        function checkModal() {
            var cookie = Cookies.get(name_modal);
            if (cookie && cookie === 'yes') {
                showModal();
            }
        }

        function closeModal() {
            Cookies.set(name_modal, 'no', {expires: 7});
            Cookies.remove(name_modal);
            $('#changeLanguageModal').addClass('hidden');
        }

        function showModal() {
            var modal = $('#changeLanguageModal');
            modal.find('.change').attr('data-lang', cookie);
            modal.find('.flag').addClass(cookie);
            modal.removeClass('hidden').addClass('animated fadeInUp');
            modal.find('.close-btn').click(function () {
                closeModal();
            });
            modal.find('.change, .flag').click(function () {
                closeModal();
                changeLanguage(cookie, modal.attr('data-reload') === 'yes');
            });
        }
    }

    return {
        init: init
    };

})();

module.exports = LanguageManager;