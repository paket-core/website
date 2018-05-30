<section class="home-down-section down-section center" id="token-sale">
    <div class="video-bg">
        <video loop muted autoplay poster="/video/preview.png" class="video-bg_video">
            <source src="/video/map.mp4" type="video/mp4">
            <source src="/video/map.ogv" type="video/ogg">
            <source src="/video/map.webm" type="video/webm">
        </video>
    </div>
    <div class="video-top">
        <div class="container">
            <div class="col-md-12 center">
                <h1 class="token-title">@lang('home.pre_sale_title')</h1>
            </div>
            <div class="col-md-12 center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       @include('home.countdown')
                    </div>
                </div>
            </div>
        </div>
        <div class="token-sale-updates">
            <div class="token-sale-update token-sale-update-1">
                <div class="title">@lang('home.pre_sale_learn_title')</div>
                <div class="desc">@lang('home.pre_sale_learn_desc')</div>
                <a href="/documents/lp/en.pdf" target="_blank">
                    <div class="btn btn-update-1">@lang('home.pre_sale_learn_btn')</div>
                </a>

                <div class="desc">@lang('home.pre_sale_learn_desc_2')</div>
                <a href="/documents/wp/en.pdf" target="_blank">
                    <div class="btn btn-update-1">@lang('home.pre_sale_learn_btn_2')</div>
                </a>
            </div>
            <div class="token-sale-update token-sale-update-2">
                <div class="title">@lang('home.pre_sale_updates_title')</div>
                <div class="desc">@lang('home.pre_sale_updates_desc')</div>
                <div class="input">
                    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_newsletter_form([
          'newsletter_email' => trans('home.pre_sale_updates_input')
          ]) !!}
                    <div class="btn-wrapper">
                        <button class="sub-btn btn subscribe-button newsletter-join-form-btn">
                            <img src="/images/custom/token-sale/arrow.png"
                                 srcset="/images/custom/token-sale/arrow@2x.png 2x,
             /images/custom/token-sale/arrow@3x.png 3x"
                                 class="arrow">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>