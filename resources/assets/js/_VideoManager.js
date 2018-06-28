var CountDownManager = (function () {

    function init() {
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

        function runVideo() {
            var modal = $('#videoModal');
            modal.modal('show').on('hidden.bs.modal', function () {
                stopVideo();
            }).on('shown.bs.modal', function () {
                $('.video-link').removeClass('video-animated');
            }).find('button.close').off('click').click(function () {
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
        }

        $(".play-button").click(function () {
            $('.video-link').addClass('video-animated');
            setTimeout(function () {
                runVideo();
            }, 700);
        });

        setTimeout(function () {
            loadVideo();
        }, 1000);
    }

    return {
        init: init
    };

})();

module.exports = CountDownManager;