<section class="home-top-section top-section center {{App::getLocale()}}">
    <div class="container center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="top-title">@lang('home.top_title')</h2>
                <div class="top-desc">@lang('home.top_desc')</div>
            </div>

            <div class="col-md-12 top-actions">
                <a href="/documents/wp/en.pdf?v=1.0.1" target="_blank">
                    <div class="btn-home">
                        <img src="/images/home/icon-white-paper.png"
                             srcset="/images/home/icon-white-paper@2x.png 2x,
             /images/home/icon-white-paper@3x.png 3x"
                             alt="@lang('home.top_action_wp')"
                             class="pdf-icon">
                        <span>@lang('home.top_action_wp')</span>
                    </div>
                </a>
                <a href="{{route('token-sale')}}">
                    <div class="btn-token-sale btn-home">
                        <img src="/images/home/icon-token.png"
                             srcset="/images/home/icon-token@2x.png 2x,
             /images/home/icon-token@3x.png 3x"
                             alt="@lang('home.top_join_now')"
                             class="join-ico-icon">
                        <span>@lang('home.top_join_now')</span>
                    </div>
                </a>
                <a href="{{\TokenChef\IcoTemplate\Services\StaticArray::TELEGRAM_URL}}" target="_blank" class="telegram-btn-wrapper">
                    <div class="btn-home">
                        <img src="/images/home/icon-telegram.png"
                             srcset="/images/home/icon-telegram@2x.png 2x,
             /images/home/icon-telegram@3x.png 3x"
                             class="icon-telegram"
                             alt="@lang('home.top_action_telegram')"
                        >
                        <span>@lang('home.top_action_telegram')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video">
            <video loop muted autoplay poster="/video/paket_header.jpeg">
                <source src="/video/paket_header_2.mp4" type="video/mp4">
                <source src="/video/paket_header_2.ogv" type="video/ogg">
                <source src="/video/paket_header_2.webm" type="video/webm">
            </video>
        </div>
    </div>
    <div class="container center believe-section">
        <div class="row">
            <div class="col-sm-4 col-md-4 believe-item">
                <div class="top-wrapper">
                    <div class="icon">
                        <img src="/images/home/icon-people.png"
                             srcset="/images/home/icon-people@2x.png 2x,
             /images/home/icon-people@3x.png 3x"
                             class="icon-people"
                             alt="@lang('home.top_action_telegram')"
                        >
                    </div>
                    <div class="title">@lang('home.about_desc_1_li_1_title')</div>
                </div>
                <div class="desc">@lang('home.about_desc_1_li_1')</div>
            </div>
            <div class="col-sm-4 col-md-4 believe-item">
                <div class="top-wrapper">
                    <div class="icon">
                        <img src="/images/home/icon-global.png"
                             srcset="/images/home/icon-global@2x.png 2x,
             /images/home/icon-global@3x.png 3x"
                             class="icon-global"
                             alt="@lang('home.top_action_telegram')"
                        >
                    </div>
                    <div class="title">@lang('home.about_desc_1_li_2_title')</div>
                </div>
                <div class="desc">@lang('home.about_desc_1_li_2')</div>
            </div>
            <div class="col-sm-4 col-md-4 believe-item">
                <div class="top-wrapper">
                    <div class="icon">
                        <img src="/images/home/icon-decentralized.png"
                             srcset="/images/home/icon-decentralized@2x.png 2x,
             /images/home/icon-decentralized@3x.png 3x"
                             class="icon-decentralized"
                             alt="@lang('home.top_action_telegram')"
                        >
                    </div>
                    <div class="title">@lang('home.about_desc_1_li_3_title')</div>
                </div>
                <div class="desc">@lang('home.about_desc_1_li_3')</div>
            </div>
        </div>
    </div>
</section>