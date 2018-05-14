var RevealManager = (function () {

    function init(config) {
        config = config ? config : {};
        reveal({
            margin: config.margin,
            bars: config.bars,
            smooth: true
        })
    }

    function initHeader(config) {
        config = config ? config : {};
        reveal({
            margin: config.margin,
            smooth: false
        })
    }

    function reveal(config) {
        var $window = $(window), isTouch = Modernizr.touch;
        var navBar = $('.header');
        var reveal = $(".revealOnScroll");
        var smooth = config.smooth;
        var margin = config.margin;
        var bars;

        margin = margin !== undefined ? margin : 120;

        if (config.bars) {
            bars = $("#menuBars").find('.bar');
        }

        if ($window.height() < 800) {
            margin = margin / 2;
        }

        if (smooth) {
            new SmoothScroll('a[href*="#"]', {
                offset: 80
            });
        }

        reveal.css('opacity', 0);
        setTimeout(function () {
            revealOnScroll();
            $window.on('scroll', revealOnScroll);
        }, 1200);

        function revealOnScroll() {

            var scrolled = $window.scrollTop(),
                win_height = $window.height();

            // var position = $('.gladius').position().top - 80;
            var position = $('#presale').height();

            if (scrolled > position) {
                navBar.addClass('filled');
            } else {
                navBar.removeClass('filled header-blue header-white');
            }

            // Hidden...
            $(".changeHeaderOnScroll").each(function () {

                var $this = $(this);
                var color = $this.data('header-color');

                if (!navBar.hasClass('header-' + color)) {
                    var offsetTop = $this.offset().top;
                    var height = $this.height();
                    if (scrolled > offsetTop && scrolled <= offsetTop + height) {
                        navBar.removeClass('header-blue header-white').addClass('header-' + color)
                    }
                }
            });

            if (config.bars) {

                $(".barsOnScroll").each(function () {

                    var $this = $(this);
                    var index = parseInt($this.data('bar-id'));
                    var offsetTop = $this.offset().top;
                    var height = $this.height();
                    if (scrolled + win_height / 3 > offsetTop && scrolled + win_height / 3 <= offsetTop + height) {
                        if (!bars.eq(index).hasClass('active')) {
                            bars.removeClass('active');
                            bars.eq(index).addClass('active');
                        }
                    }
                });
            }

            // Hidden...
            $(".revealOnScroll.animated").each(function () {

                var $this = $(this),
                    offsetTop = $this.offset().top;
                var animation = $this.data('animation');
                if (!$this.hasClass(animation)) {
                    $this.addClass(animation);
                }

                if (scrolled + win_height + 500 < offsetTop) {
                    $(this).removeClass('animated ' + animation)
                }
            });

            // Showed...
            $(".revealOnScroll:not(.animated)").each(function () {
                var $this = $(this),
                    offsetTop = $this.offset().top;

                if ((scrolled + win_height - margin > offsetTop)) {

                    if ($this.data('timeout')) {
                        window.setTimeout(function () {
                            $this.css('opacity', 1).addClass('animated ' + $this.data('animation'));
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.css('opacity', 1).addClass('animated ' + $this.data('animation'));
                    }
                }
            });
        }

        revealOnScroll();
        initSocialButton();
        initMenu();
    }

    function initMenu() {
        $('.menu-open').click(function () {
            $('.menu').removeClass('hidden');
            setTimeout(function () {
                $('.menu-close').removeClass('hidden');
            }, 1000);
        });

        $('.menu a').click(function () {
            $('.menu-close').trigger('click');
        });

        $('.menu-close').click(function () {
            var section = $(this).parents('.menu');
            $(this).addClass('hidden');
            section.find('.section-right').removeClass('fadeInRight').addClass('fadeOutRight');
            section.find('.section-left').removeClass('fadeInLeft').addClass('fadeOutLeft');
            setTimeout(function () {
                section.addClass('hidden');
                section.find('.section-right').addClass('fadeInRight').removeClass('fadeOutRight');
                section.find('.section-left').addClass('fadeInLeft').removeClass('fadeOutLeft');
            }, 1000);
        });
    }

    function initSocialButton() {

        var header = $('header .social-wrapper');
        var active = 'active';

        $('#socialButton').click(function (event) {
            event.stopPropagation();
            header.addClass(active)
        });

        $(window).click(function () {
            if (header.hasClass(active)) {
                header.removeClass(active);
            }
        });
    }

    return {
        init: init,
        initHeader: initHeader,
        initMenu: initMenu
    };

})();

module.exports = RevealManager;