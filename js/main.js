var ecoInterval;

$( document ).ready(function() { // Запускает скрипты когда загрузило страницу
    initEcosystemGraph();
    initQuoteSlider();
    initCompanies();
    initTokenSale();
    initRoadMap();
    init();
    console.log("12")
});
function initQuoteSlider() {
    var wrapper = $('#quoteWrapper');
    var items = $('.media-carousel').find('.item');
    var actCl = 'active';
    var index = 0;
    var timeout = 5000;
    quoteSlide = setInterval(animate, timeout);

    animate();

    function animate() {
        wrapper.removeClass('fadeOut').addClass('fadeIn');
        items.removeClass(actCl);
        var item = items.eq(index);
        item.addClass(actCl);
        wrapper.find('.quote').html(item.find('.quote').html());
        wrapper.find('.quote-company').html(item.find('.quote-company').html());
        setTimeout(function () {
            if (++index >= items.length) {
                index = 0;
            }
            wrapper.removeClass('fadeIn').addClass('fadeOut');
        }, timeout - 800);
    }
}
function initEcosystemGraph() {

    var ecoGraph = $('#ecoGraph');
    var items = ecoGraph.find('.graph-item');
    var ecoDesc = $('#ecoGraphDesc');
    var ecoInner = ecoDesc.find('h2,p');

    var title = ecoDesc.find('h2');
    var desc = ecoDesc.find('p');

    var rotate = 2;

    var arc_params;
    var radius = 300;

    function goToItem(item, rotate, active) {

        var current = parseInt(item.attr('data-start'));
        var newValue = parseInt(current + rotate);

        var diff = current - newValue;
        diff = diff < 0 ? diff * -1 : diff;
        var duration = parseInt(diff / 60);
        duration = duration < 2 ? 2 : duration;

        arc_params = {
            center: [radius - 90, radius - 90],
            radius: radius,
            start: current,
            end: newValue,
            dir: current < newValue ? 1 : -1
        };

        if (active) {
            selectOption(item)
        }

        item.animate({path: new $.path.arc(arc_params)}, duration * 500, function () {
            item.attr('data-start', newValue);
            if (active) {
                item.addClass('active');
            }
        });
    }

    function animate(angle) {

        ecoInner.removeClass('fadeIn').addClass('animated fadeOut');
        setTimeout(function () {
            rotate--;
            if (rotate < 0) {
                rotate = 5;
            }
            items.removeClass('active');
            items.each(function (index) {
                var el = $(this);
                goToItem(el, angle, index === rotate);
            })
        }, 500);
    }

    function selectOption(item) {
        title.html(item.find('.graph-title').html());
        desc.html(item.find('.graph-desc').html());
        ecoInner.removeClass('fadeOut').addClass('fadeIn');
    }

    items.each(function (index) {
        $(this).attr('data-start', 30 + index * 60);
        $(this).off('click').click(function () {
            clearInterval(ecoInterval);
            var diff = rotate - index;
            rotate = index + 1;
            animate(diff * 60);
        });
    });

    animate(60);
    clearInterval(ecoInterval);
    ecoInterval = setInterval(function () {
        animate(60);
    }, 5000);
}

function initCompanies() {

        $('#viewMoreCompanies').off('click').click(function () {
            $('.company-row.additional').removeClass('additional');
        });

        // if (owlPublications) {
        //     owlPublications.owlCarousel('destroy')
        // }

        var width = $(window).width();
        var items = 3;
        if (width < 500) {
            items = 1;
        } else if (width < 600) {
            items = 2;
        }

        $('.owl-carousel-companies-mobile').owlCarousel({
            items: items,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 3000,
            dots: false
        });
}

function init() {
    var widthSmall = 767;
    var widthLarge = 1200;
    var win = $(window);
    var owlProject, owlTeam, owlEcosystem, owlMedia;
    var width = win.width();

    RevealManager.init({
        bars: true
    });

    //CountDownManager.init();
    //VideoManager.init();
    //LoginPageEmbedded.init();

    $(window).resize(function () {
        width = $(this).width();
        reloadItems();
        console.log("resize")
    });

    function reloadItems() {
        initProjects(width);
        initEcoSystem(width);
        initTeam(width);
        initMedia(width);
    }

    initRoadMap();
    initQuoteSlider();
    reloadItems();
    initMedia(width);

    function initTeam(width) {
        if (width <= widthSmall) {
            owlTeam = $(".team-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 10000,
                loop: true,
                stagePadding: 0,
                autoHeight: true,
                items: 1
            });

            $('.owlTeamNextBtn').off('click').click(function () {
                owlTeam.trigger('next.owl.carousel');
            });

            $('.owlTeamPrevBtn').off('click').click(function () {
                owlTeam.trigger('prev.owl.carousel', [300]);
            });
        } else {
            if (owlTeam) {
                owlTeam.owlCarousel('destroy');
                owlTeam = null;
            }
        }
    }

    function initMedia(width) {
        if (width <= widthSmall) {
            owlMedia = $(".media-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 3000,
                loop: true,
                stagePadding: 0,
                autoHeight: true,
                items: 1
            });

        } else {
            if (owlMedia) {
                owlMedia.owlCarousel('destroy');
                owlMedia = null;
            }
        }
    }

    function initQuoteSlider() {
        var wrapper = $('#quoteWrapper');
        var items = $('.media-carousel').find('.item');
        var actCl = 'active';
        var index = 0;
        var timeout = 5000;
        quoteSlide = setInterval(animate, timeout);

        animate();

        function animate() {
            wrapper.removeClass('fadeOut').addClass('fadeIn');
            items.removeClass(actCl);
            var item = items.eq(index);
            item.addClass(actCl);
            wrapper.find('.quote').html(item.find('.quote').html());
            wrapper.find('.quote-company').html(item.find('.quote-company').html());
            setTimeout(function () {
                if (++index >= items.length) {
                    index = 0;
                }
                wrapper.removeClass('fadeIn').addClass('fadeOut');
            }, timeout - 800);
        }
    }

    function initEcoSystem(width) {

        if (width < widthLarge) {

            if (!owlEcosystem) {
                $('.graph-item').removeAttr('style');

                owlEcosystem = $(".eco-carousel").owlCarousel({
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 15000,
                    autoHeight: true,
                    loop: true,
                    stagePadding: 30,
                    items: 1
                });

                $('.owlEcosystemNextBtn').off('click').click(function () {
                    owlEcosystem.trigger('next.owl.carousel');
                });

                $('.owlEcosystemPrevBtn').off('click').click(function () {
                    owlEcosystem.trigger('prev.owl.carousel', [300]);
                });

                ecoAnimation = false;
                clearInterval(ecoInterval);
            }

        } else {

            if (owlEcosystem) {
                owlEcosystem.owlCarousel('destroy');
                owlEcosystem = null;
            }

            if (!ecoAnimation) {
                ecoAnimation = true;
                initEcosystemGraph();
            }
        }
    }

    function initProjects(width) {
        if (width < widthSmall) {
            if (!owlProject) {
                owlProject = $(".project-items-carousel").owlCarousel({
                    autoHeight: true,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 15000,
                    loop: true,
                    items: 1
                });

                $('.owlProjectNextBtn').off('click').click(function () {
                    owlProject.trigger('next.owl.carousel');
                });

                // Go to the previous item
                $('.owlProjectPrevBtn').off('click').click(function () {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owlProject.trigger('prev.owl.carousel', [300]);
                });
            }
        } else {
            if (owlProject) {
                owlProject.owlCarousel('destroy');
                owlProject = null;
            }
        }
    }

}

function initTokenSale() {
    initRoadMap();
    // CountDownManager.init();
}

function initRoadMap() {
    var owlRoadMap = $(".road-map-carousel-1").owlCarousel({
        items: 1
    });

    $('.owlRoadMapNextBtn').click(function () {
        owlRoadMap.trigger('next.owl.carousel');
    });

    $('.owlRoadMapPrevBtn').click(function () {
        owlRoadMap.trigger('prev.owl.carousel', [300]);
    });

    var owlRoadMap2 = $(".road-map-carousel-2").owlCarousel({
        items: 4
    });

    $('.owlRoadMap2NextBtn').click(function () {
        owlRoadMap2.trigger('next.owl.carousel');
    });

    $('.owlRoadMap2PrevBtn').click(function () {
        owlRoadMap2.trigger('prev.owl.carousel', [300]);
    });
}

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
        var $window = $(window);
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

        // if (smooth) {
        //     new SmoothScroll('a[href*="#"]', {
        //         offset: 80
        //     });
        // }

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