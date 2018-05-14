<section id="presale" class="center barsOnScroll" data-bar-id="0">
    <div class="top-section">
        <div class="container image-background-wrapper">
            <div class="image-background back-with-image abs"></div>
        </div>
        <div class="gradient abs">

        </div>
        <div class="oval"></div>
        <div class="container">
            <div class="top">
                <h1>@lang('home.top_title')</h1>
                <h2>@lang('home.top_desc')</h2>
                <div class="blue-line"></div>
                <div class="sale-start">
                    <p>@lang('home.public_presale_start')</p>
                    <div class="blue-line"></div>
                    @include('partials.counter')
                    <div class="rectangles">
                        <div class="rect-1 down"></div>
                        <div class="rect-2 down"></div>
                        <div class="rect-3"></div>
                        <div class="rect-4 down"></div>
                        <div class="rect-5 down"></div>
                        <div class="rect-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="join-buttons">
            <a class="a-scroll" data-scroll href="{{$path}}#our-partners">
                <button class="btn arrow">
                    <img src="/images/icon/arrow_down_blue.svg">
                </button>
            </a>
            <a class="join-click">
                <button class="btn blue">
                    <img src="/images/icon/plus.svg" class="plus"><span>@lang('home.join_now')</span>
                </button>
            </a>
            <a class="a-white-paper" href="{{\App\Services\ICOService::get_wp_link()}}" target="_blank">
                <button class="btn green">
                    @lang('home.white_paper')
                </button>
            </a>
        </div>
        <div class="right-info">
            <p class="date">2018</p>
            <p class="details">@lang('home.top_details')</p>
            <div class="line"></div>
        </div>
    </div>
</section>