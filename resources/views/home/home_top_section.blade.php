<section class="home-top-section top-section center">
    <div class="container center">
        <div class="row">
            <div class="col-md-7 col-md-push-5 video-wrapper">
                <div class="video">
                    <video loop muted autoplay poster="/video/paket_header.jpg">
                        <source src="/video/paket_header_2.mp4" type="video/mp4">
                        <source src="/video/paket_header_2.ogv" type="video/ogg">
                        <source src="/video/paket_header_2.webm" type="video/webm">
                    </video>
                </div>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-title">@lang('home.top_title')</div>
                        <div class="play play-button" data-video-src="Qbu_FRg8vuU"
                             data-target="#videoModal"
                             id="playVideoButton">
                            <div class="play-left">
                                <img src="/images/custom/token-sale/play-icon.png"
                                     srcset="/images/custom/token-sale/play-icon@2x.png 2x,
             /images/custom/token-sale/play-icon@3x.png 3x"
                                     class="play-icon">
                            </div>
                            <div class="play-right">
                                @lang('home.play_video')
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="top-desc">@lang('home.top_desc')</div>
                    </div>
                    <div class="col-md-12 top-actions">
                        <a href="/documents/wp/en.pdf" target="_blank">
                            <div class="btn-top-action btn-top-action-1">
                                <img src="/images/custom/token-sale/pdf-icon.png"
                                     srcset="/images/custom/token-sale/pdf-icon@2x.png 2x,
             /images/custom/token-sale/pdf-icon@3x.png 3x"
                                     class="pdf-icon">
                                @lang('home.top_action_wp')
                            </div>
                        </a>
                        <a href="https://t.me/PaketCommunity" target="_blank">
                            <div class="btn-top-action btn-top-action-2">
                                <img src="/images/custom/token-sale/logo-copy.png"
                                     srcset="/images/custom/token-sale/logo-copy@2x.png 2x,
             /images/custom/token-sale/logo-copy@3x.png 3x"
                                     class="logo-copy">
                                @lang('home.top_action_telegram')
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('token-sale')}}" target="_blank">
                            <div class="btn-join">
                                <div class="inner">
                                    <span class="img"><img src="/images/custom/token-sale/join-ico-icon.png"
                                                           srcset="/images/custom/token-sale/join-ico-icon@2x.png 2x,
             /images/custom/token-sale/join-ico-icon@3x.png 3x"
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