<section class="mining changeHeaderOnScroll barsOnScroll" id="about-trilliant" data-header-color="blue" data-bar-id="2">
    <div class="blue-dot"></div>
    <img class="zig-zap zig-zap-1" src="/images/icon/zig_zap.svg"/>
    <img class="zig-zap zig-zap-2" src="/images/icon/zig_zap.svg"/>
    <div class="orange-dot"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>@lang('home.mining_title')</h2>
                <div class="title-line"></div>
                <div class="desc">@lang('home.mining_desc',[
                    'FOCUS'=> trans('home.mining_desc_focus'),
                ])</div>
                <div class="desc">@lang('home.mining_desc_2',[
                    'PIECE'=> trans('home.mining_desc_2_piece'),
                    'PARTICIPATE'=> trans('home.mining_desc_2_participate'),
                    'TOKENS'=> '<a href="'.route('token-sale').'">'.trans('home.mining_desc_2_tokens').'</a>'
                ])</div>
            </div>
            <div class="col-md-4 col-md-offset-1 mining-wrapper">
                <img class="how-it-works" src="/images/illus/how_it_works.png"/>
                <div class="red-dot"></div>
                <div class="see">
                    <a href="/pdf/factsheet.pdf" target="_blank">
                        <button class="btn btn-see">@lang('home.mining_btn_see')</button>
                        <div class="play">
                            <img src="/images/icon/play.svg"/>
                        </div>
                    </a>
                </div>
                <div class="three-dots">
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>