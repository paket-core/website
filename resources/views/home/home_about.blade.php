<div class="home-section home-about dark center">
    <div class="container">

        <div class="col-md-12 center">
            <div id="playVideoButton" class="video play-button" data-video-src="{{\App\Services\ICOService::get_video_id()}}">
                <img src="/images/home/video.png"
                     srcset="/images/home/video@2x.png 2x,
             /images/home/video@3x.png 3x"
                     alt="@lang('home.about_title')
                             ">
                <img src="/images/home/you-tube.png"
                     srcset="/images/home/you-tube@2x.png 2x,
             /images/home/you-tube@3x.png 3x"
                     alt="@lang('home.about_title')"
                     class="youtube-img"
                >
            </div>
        </div>

        <div class="col-md-12">
            <div class="desc desc-2">
                @lang('home.about_desc_2')
            </div>
        </div>

    </div>
</div>