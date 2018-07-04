<section class="home-top-section top-section center {{App::getLocale()}}">
    <div class="container center">
        <div class="row">
            <div class="col-md-7 col-md-push-5 video-wrapper">
                <div class="video">
                    <video loop muted autoplay poster="/video/paket_header.jpeg">
                        <source src="/video/paket_header_2.mp4" type="video/mp4">
                        <source src="/video/paket_header_2.ogv" type="video/ogg">
                        <source src="/video/paket_header_2.webm" type="video/webm">
                    </video>
                </div>
            </div>
            <div class="col-md-5 col-md-pull-7 video-text-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="top-title">@lang('home.top_title')</h2>
                        <div class="top-desc">@lang('home.top_desc')</div>
                        <div class="play play-button" data-video-src="{{\App\Services\ICOService::get_video_id()}}"
                             data-target="#videoModal"
                             id="playVideoButton">
                            <div class="play-left">
                                <img src="/images/custom/token-sale-new/yt_s.png"
                                     srcset="/images/custom/token-sale-new/yt_m.png 2x,
             /images/custom/token-sale-new/yt_b.png 3x"
                                     alt="@lang('home.play_video')"
                                     class="play-icon">
                            </div>
                            <div class="play-right">
                                @lang('home.play_video')
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 top-actions">
                        <a href="/documents/wp/en.pdf?v=1.0.1" target="_blank">
                            <div class="btn-top-action btn-top-action-1">
                                <img src="/images/custom/token-sale-new/pdf-icon.png"
                                     srcset="/images/custom/token-sale-new/pdf-icon@2x.png 2x,
             /images/custom/token-sale-new/pdf-icon@3x.png 3x"
                                     alt="@lang('home.top_action_wp')"
                                     class="pdf-icon">
                                @lang('home.top_action_wp')
                            </div>
                        </a>
                        <a href="{{\TokenChef\IcoTemplate\Services\StaticArray::TELEGRAM_URL}}" target="_blank">
                            <div class="btn-top-action btn-top-action-2">
                                <img src="/images/custom/token-sale-new/logo-copy.png"
                                     srcset="/images/custom/token-sale-new/logo-copy@2x.png 2x,
             /images/custom/token-sale-new/logo-copy@3x.png 3x"
                                     alt="@lang('home.top_action_telegram')"
                                     class="logo-copy">
                                @lang('home.top_action_telegram')
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 down-actions">
                        <a href="{{route('token-sale')}}">
                            <div class="btn-join sheen">
                                <div class="inner">
                                    <span class="img"><img src="/images/custom/token-sale-new/join-ico-icon.png"
                                                           srcset="/images/custom/token-sale-new/join-ico-icon@2x.png 2x,
             /images/custom/token-sale-new/join-ico-icon@3x.png 3x"
                                                           alt="@lang('home.top_join_now')"
                                                           class="join-ico-icon"></span>
                                    <span>@lang('home.top_join_now')</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 center">
        <div class="row">

        </div>
    </div>
</section>