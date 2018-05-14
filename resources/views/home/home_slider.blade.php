<section class="dark-background slider changeHeaderOnScroll barsOnScroll" id="ownership-system"
         data-header-color="white" data-bar-id="3">
    <div class="blue-dot blue-dot-1 big"></div>
    <div class="blue-dot blue-dot-2 small"></div>
    <div class="blue-dot blue-dot-3 big"></div>
    <div class="blue-dot blue-dot-4 small"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 slider-left">
                <div class="top-title">
                    <p>@lang('home.slider_top_title')</p>
                    <button id="mapModalButton" class="btn btn-outline">@lang('home.slider_btn_map')</button>
                </div>
                <div class="text">
                    <div class="title">@lang('home.slider_title')</div>
                    <div class="desc">
                        <div class="owl-carousel">
                            <div>
                                @lang('home.slider_text_1',[
                                    'TAKE_CARE' => '<span class="important">'.trans('home.slider_text_1_take_care').'</span>'
                                ])
                            </div>
                            <div>
                                @lang('home.slider_text_2')
                            </div>
                            <div>
                                @lang('home.slider_text_3')
                            </div>
                            <div>
                                @lang('home.slider_text_4')
                            </div>
                        </div>
                    </div>
                    <div class="down-text" id="calculatorModalButton">@lang('home.slider_down_text')</div>
                    <div class="steps">
                        <div class="arrow arrow-left">
                            <img src="/images/icon/arrow_left_gray.svg"/>
                        </div>
                        <div class="step">
                            <div class="current">01</div>
                            <div class="line"></div>
                            <div class="max">04</div>
                        </div>
                        <div class="arrow arrow-right">
                            <img src="/images/icon/arrow_right_gray.svg"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 slider-right">
                <div class="back-with-image"></div>
            </div>
        </div>
    </div>
</section>