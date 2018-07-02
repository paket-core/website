<section class="home-section home-road-map center">
    <div class="container">
        <div class="col-md-12 center">
            <h2 class="title">@lang('home.road_map_title')</h2>
        </div>
        <div class="col-md-12 center">
            <div class="row">

                <div class="road-map-wrapper">
                    <div class="owl-carousel road-map-carousel-2">
                        @foreach($road_maps as $item)
                            <div class="road-map-item {{$item->finished ? 'finished' : ''}}">
                                <div class="ellipsis ellipsis-1"></div>
                                <div class="ellipsis ellipsis-2"></div>
                                <div class="ellipsis-line"></div>
                                <div class="road-map-date">{!! $item->date !!}</div>
                                <div class="road-map-image">
                                    <div class="completed"><img src="/images/custom/token-sale/completed.png" alt="{{$item->title}}"></div>
                                    <img src="/images/custom/mobile/location/locationIcon.png"
                                         srcset="/images/custom/mobile/location/locationIcon@2x.png 2x,
             /images/custom/mobile/location/locationIcon@3x.png 3x"
                                         alt="{{$item->title}}"
                                         class="location">
                                </div>
                                <div class="road-map-title">{!! $item->title!!}</div>
                                <div class="road-map-desc">{!! $item->desc!!}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="owl-carousel-buttons nice-carousel-buttons">
                        <div class="line"></div>
                        <div class="owlRoadMap2PrevBtn">
                            <img src="/images/custom/mobile/arrow_left/arrow.png"
                                 srcset="/images/custom/mobile/arrow_left/arrow@2x.png 2x,
             /images/custom/mobile/arrow_left/arrow@3x.png 3x"
                                 alt="@lang('pagination.previous')"
                                 class="diamond">
                        </div>
                        <div class="owlRoadMap2NextBtn">
                            <img src="/images/custom/mobile/arrow_right/arrow.png"
                                 srcset="/images/custom/mobile/arrow_right/arrow@2x.png 2x,
             /images/custom/mobile/arrow_right/arrow@3x.png 3x"
                                 alt="@lang('pagination.next')"
                                 class="diamond">
                        </div>
                    </div>

                </div>

                <div class="road-map-carousel-wrapper">

                    <div class="owl-carousel road-map-carousel-1">
                        @foreach($road_maps as $item)
                            <div class="road-map-item {{$item->finished ? 'finished' : ''}}">
                                <div class="road-map-date">{!! $item->date !!}</div>
                                <div class="road-map-image">
                                    <div class="completed"><img src="/images/custom/token-sale/completed.png" alt="{{$item->title}}"></div>
                                    <img src="/images/custom/mobile/location/locationIcon.png"
                                         srcset="/images/custom/mobile/location/locationIcon@2x.png 2x,
             /images/custom/mobile/location/locationIcon@3x.png 3x"
                                         alt="{{$item->title}}"
                                         class="location">
                                </div>
                                <div class="road-map-title">{!! $item->title!!}</div>
                                <div class="road-map-desc">{!! $item->desc!!}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="owl-carousel-buttons nice-carousel-buttons">
                        <div class="line"></div>
                        <div class="owlRoadMapPrevBtn">
                            <img src="/images/custom/mobile/arrow_left/arrow.png"
                                 srcset="/images/custom/mobile/arrow_left/arrow@2x.png 2x,
             /images/custom/mobile/arrow_left/arrow@3x.png 3x"
                                 alt="@lang('pagination.previous')"
                                 class="diamond">
                        </div>
                        <div class="owlRoadMapNextBtn">
                            <img src="/images/custom/mobile/arrow_right/arrow.png"
                                 srcset="/images/custom/mobile/arrow_right/arrow@2x.png 2x,
             /images/custom/mobile/arrow_right/arrow@3x.png 3x"
                                 alt="@lang('pagination.next')"
                                 class="diamond">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>