<section class="home-section token-ecosystem dark center">
    <div class="container">
        <div class="col-md-12 center">
            <h2 class="title">@lang('home.ecosystem_title')</h2>
        </div>
        <div class="col-md-12 center">
            <p class="title-desc">@lang('home.ecosystem_desc')</p>
        </div>
        <div class="col-md-12 eco-graph-wrapper">
            <div class="eco-graph" id="ecoGraph">
                <img src="/images/ecosystem/circle_back.png" class="img-back graph-part"
                     alt="@lang('home.ecosystem_title')">
                <div class="img-center graph-part">
                    <img src="/images/ecosystem/circle_back_center.png" class="img-center-back"
                         alt="@lang('home.ecosystem_title')">
                    <img src="/images/logo/icon.svg" class="img-center-icon" alt="@lang('home.ecosystem_title')">
                </div>

                <div class="eco-carousel-wrapper">

                    <div class="owl-carousel-buttons nice-carousel-buttons">
                        <div class="owlEcosystemPrevBtn">
                            <img src="/images/custom/mobile/arrow_left/arrow.png"
                                 srcset="/images/custom/mobile/arrow_left/arrow@2x.png 2x,
             /images/custom/mobile/arrow_left/arrow@3x.png 3x"
                                 alt="@lang('pagination.previous')"
                                 class="diamond">
                        </div>
                        <div class="owlEcosystemNextBtn">
                            <img src="/images/custom/mobile/arrow_right/arrow.png"
                                 srcset="/images/custom/mobile/arrow_right/arrow@2x.png 2x,
             /images/custom/mobile/arrow_right/arrow@3x.png 3x"
                                 alt="@lang('pagination.next')"
                                 class="diamond">
                        </div>
                    </div>

                    <div class="owl-carousel eco-carousel graph-items">

                        @foreach($graph_items as $index => $item)
                            <div class="graph-item graph-item-{{$index+1}} active">
                                <div class="inner">
                                    <div class="graph-icon">
                                        <img src="/images/ecosystem/{{$item}}.png"
                                             srcset="/images/ecosystem/{{$item}}@2x.png 2x,
             /images/ecosystem/{{$item}}@3x.png 3x"
                                             alt="@lang('home.ecosystem_graph_title_'.$index)"
                                             class="plan-icon">
                                    </div>
                                </div>
                                <div class="text-wrapper">
                                    <div class="graph-title">@lang('home.ecosystem_graph_title_'.($index+1))</div>
                                    <div class="graph-desc">@lang('home.ecosystem_graph_desc_'.($index+1))</div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
            <div class="eco-graph-text-section animated graph-part" id="ecoGraphDesc">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="inner">
                    <h2 class="title">@lang('home.ecosystem_graph_title_1')</h2>
                    <p class="desc">@lang('home.ecosystem_graph_desc_1')</p>
                </div>
            </div>
        </div>

    </div>
</section>