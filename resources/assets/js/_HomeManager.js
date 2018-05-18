var HomeManager = (function () {

    var RevealManager = require('./_RevealManager');
    var CountDownManager = require('./_CountDownManager');
    var VideoManager = require('./_VideoManager');
    var LoginPageEmbedded = require('./_LoginPageEmbedded');

    function initVideo() {
        var player;

        function loadVideo(play) {

            if (!player) {
                // 2. This code loads the IFrame Player API code asynchronously.
                var tag = document.createElement('script');

                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                var videoSrc = $('#playVideoButton').attr("data-video-src");

                // 3. This function creates an <iframe> (and YouTube player)
                //    after the API code downloads.
                window.onYouTubeIframeAPIReady = function () {
                    player = new YT.Player('player', {
                        width: '100%',
                        height: '100%',
                        playerVars: {
                            modestbranding: 1,
                            rel: 0,
                            showinfo: 0,
                            controls: 1,
                            html5: 1
                        },
                        events: {
                            'onReady': onPlayerReady
                        },
                        videoId: videoSrc
                    });
                };

                // 4. The API will call this function when the video player is ready.
                function onPlayerReady() {
                    play && player.playVideo();
                }
            } else {
                play && player.playVideo();
            }
        }

        $(".play-button").click(function () {
            var theModal = $(this).data("target");
            $(theModal + ' button.close').off('click').click(function () {
                stopVideo();
            });

            if (player) {
                player.playVideo();
            } else {
                loadVideo(true);
            }

            function stopVideo() {
                player && player.stopVideo();
            }

        });

        setTimeout(function () {
            loadVideo();
        }, 2000);
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

        $('.graph-btn').click(function () {
            var item = $(this).parents('.graph-item');
            item.toggleClass('active')
        });

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

        $('#viewMoreCompanies').click(function () {
            $('.company-row.additional').removeClass('additional');
        });

        $(window).resize(function () {
            initCompanies()
        });

        var owlPublications;

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

        initCompanies();
        initVideo();

    }

    return {
        init: init
    }
})();

module.exports = HomeManager;