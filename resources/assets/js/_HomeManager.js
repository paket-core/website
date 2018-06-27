var HomeManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var VideoManager = require('./_VideoManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    var owlPublications;

    function initRoadMap() {
        var owlRoadMap = $(".road-map-carousel-1").owlCarousel({
            items: 1
        });

        $('.owlRoadMapNextBtn').click(function () {
            owlRoadMap.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlRoadMapPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlRoadMap.trigger('prev.owl.carousel', [300]);
        });

        var owlRoadMap2 = $(".road-map-carousel-2").owlCarousel({
            items: 4
        });

        $('.owlRoadMap2NextBtn').click(function () {
            owlRoadMap2.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlRoadMap2PrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlRoadMap2.trigger('prev.owl.carousel', [300]);
        });
    }

    function initCompanies() {

        if (owlPublications) {
            owlPublications.owlCarousel('destroy')
        }

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

    function initEcosystemGraph() {
        var ecoGraph = $('#ecoGraph');
        var playing = true;
        var cl;

        var items = ecoGraph.find('.graph-item');
        var wrapper = ecoGraph.find('.graph-items');
        var ecoDesc = $('#ecoGraphDesc');

        var title = ecoDesc.find('h2');
        var desc = ecoDesc.find('p');
        var index = 0;
        var animating = false;
        var autoAnimation = true;
        var timeout_1, timeout_2, timeout_3, timeout_4;

        function runAnimation(playing) {
            cl = playing ? 'running' : 'paused';
            items.css("-webkit-animation-play-state", cl);
            wrapper.css("-webkit-animation-play-state", cl);
        }

        function animateGraph() {
            if (autoAnimation) {
                playing = !playing;
                runAnimation(playing);
                if (!playing) {
                    index++;
                    if (index >= 6) {
                        index = 0;
                    }
                    selectOption(index);
                    // ecoDesc.removeClass('fadeOut').addClass('fadeIn');
                    timeout_1 = setTimeout(function () {
                        if (autoAnimation) {
                            items.removeClass('active');
                            // ecoDesc.removeClass('fadeIn').addClass('fadeOut');
                            setTimeout(function () {
                                animateGraph();
                            }, 1500)
                        }
                    }, 5000);
                } else {
                    timeout_2 = setTimeout(animateGraph, 1000);
                }
            }
        }

        function selectItem(el, newIndex) {
            el.click(function () {
                if (!animating) {
                    animating = true;
                    autoAnimation = false;
                    // ecoDesc.removeClass('fadeIn').addClass('fadeOut');
                    items.removeClass('active');
                    var diff = newIndex - index;
                    selectOption(newIndex);
                    if (diff < 0) {
                        diff = diff + 6;
                    }
                    timeout_3 = setTimeout(function () {
                        items.css("animation-duration", '4800ms');
                        wrapper.css("animation-duration", '4800ms');
                        runAnimation(true);
                        timeout_4 = setTimeout(function () {
                            animating = false;
                            runAnimation(false);
                            // ecoDesc.removeClass('fadeOut').addClass('fadeIn');
                        }, diff * 800);
                    }, 800)
                }
            })
        }

        items.each(function (index) {
            selectItem($(this), index);
        });

        function selectOption(newIndex) {
            index = newIndex;
            var item = items.eq(index);
            title.html(item.find('.graph-title').html());
            desc.html(item.find('.graph-desc').html());
            item.addClass('active');
        }

        var showed = false;
        var win = $(window);

        function reset() {
            showed = true;
            playing = true;
            index = 0;
            items.removeClass('active');
            clearTimeout(timeout_1);
            clearTimeout(timeout_2);
            clearTimeout(timeout_3);
            clearTimeout(timeout_4);
            animating = false;
            ecoGraph.addClass('animated');
            animateGraph();
        }

        function checkSize() {
            if (win.width() >= 1200) {
                if (!showed) {
                    reset();
                }
            } else {
                if (showed) {
                    showed = false;
                    ecoGraph.removeClass('animated');
                }
            }
        }

        if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
            wrapper.css("-webkit-animation-direction", 'alternate-reverse');
            wrapper.css("animation-direction", 'alternate-reverse');
        } else {
            wrapper.addClass('reversed');
        }

        win.on('resize', function () {
            checkSize();
        });

        checkSize();

        $(window).blur(function () {
            showed = false;
            ecoGraph.removeClass('animated');
        });

        $(window).focus(function () {
            reset();
        });

    }

    function init() {
        RevealManager.init({
            bars: true
        });
        CountDownManager.init();
        VideoManager.init();
        LoginPageEmbedded.init();
        var modal = $('#mapModal');
        $('#mapModalButton').click(function () {
            modal.modal('show');
        });
        $('#closeMapModal').click(function () {
            modal.modal('hide');
        });


        var modalCalculator = $('#calculatorModal');
        $('#calculatorModalButton').click(function () {
            modalCalculator.modal('show');
        });
        $('#closeCalculatorModal').click(function () {
            modalCalculator.modal('hide');
        });

        $('.js-example-basic-single').select2({
            minimumResultsForSearch: -1
        });

        $('html').mousemove(function (e) {

            var wx = $(window).width();
            var wy = $(window).height();

            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;

            var newx = x - wx / 2;
            var newy = y - wy / 2;

            $('#wrapper').find('div').each(function () {
                var speed = $(this).attr('data-speed');
                if ($(this).attr('data-revert')) speed *= -1;
                TweenMax.to($(this), 1, {x: (1 - newx * speed), y: (1 - newy * speed)});
            });

        });

        initEcosystemGraph();

        var owlEcosystem = $(".eco-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            stagePadding: 40,
            items: 1
        });

        $('.owlEcosystemNextBtn').click(function () {
            owlEcosystem.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlEcosystemPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlEcosystem.trigger('prev.owl.carousel', [300]);
        });

        var owlTeam = $(".team-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            stagePadding: 70,
            items: 1
        });

        $('.owlTeamNextBtn').click(function () {
            owlTeam.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlTeamPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlTeam.trigger('prev.owl.carousel', [300]);
        });

        var owlProject = $(".project-items-carousel").owlCarousel({
            autoHeight: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 15000,
            loop: true,
            items: 1
        });

        $('.owlProjectNextBtn').click(function () {
            owlProject.trigger('next.owl.carousel');
        });

// Go to the previous item
        $('.owlProjectPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owlProject.trigger('prev.owl.carousel', [300]);
        });


        $('#viewMoreCompanies').click(function () {
            $('.company-row.additional').removeClass('additional');
        });

        $(window).resize(function () {
            initCompanies()
        });

        initRoadMap();
        initCompanies();

    }

    function initTokenSale() {
        initRoadMap();
        CountDownManager.init();
    }

    return {
        init: init,
        initTokenSale: initTokenSale
    }
})();

module.exports = HomeManager;