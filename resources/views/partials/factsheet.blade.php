<section class="subscribe changeHeaderOnScroll" data-header-color="blue">
    <div class="container">
        <div class="back-images">
            <img class="zig-zap zig-zap-1" src="/images/icon/zig_zap.svg"/>
            <img class="zig-zap zig-zap-2" src="/images/icon/zig_zap.svg"/>
            <div class="dot single-dot dot-red dot-1"></div>
            <div class="dot single-dot dot-red dot-2"></div>
            <div class="dot single-dot dot-red dot-3"></div>
            <div class="dot single-dot dot-blue dot-1"></div>
            <div class="three-dots">
                <div class="dot dot-blue dot-1"></div>
                <div class="dot dot-blue dot-2"></div>
                <div class="dot dot-blue dot-3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-md-push-6">
                <p class="subscribe-text">@lang('home.subscribe_text')</p>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="factsheet-wrapper">
                    <a href="{{\App\Services\ICOService::get_fact_sheet_link()}}" target="_blank" class="factsheet-link">
                        <div class="btn-with-shadow">
                            <span>@lang('home.factsheet_link')</span>
                            <button class="subscribe-button arrow-btn btn">
                                <img src="/images/icon/arrow_right.svg">
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>