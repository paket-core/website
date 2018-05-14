<section class="road-map changeHeaderOnScroll" id="roadmap" data-header-color="blue">
    <div class="container">
        <div class="col-md-12">
            <h2 class="title">@lang('home.our_road_map')</h2>
            <div class="title-line"></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="plan-details">
                    <div class="col-md-6 plan-left">
                        @foreach([2,4,6] as $step)
                            <div class="plan-item plan-item-{{$step}} revealOnScroll" data-animation="fadeInLeft">
                                <p class="step-number">@lang('home.road_map_step_'.$step)</p>
                                <p class="step-date">@lang('home.road_map_step_date_'.$step)</p>
                                <p class="step-desc">@lang('home.road_map_step_desc_'.$step)</p>
                                <div class="border"></div>
                                <div class="oval">
                                    <div class="oval-small"></div>
                                </div>
                                <div class="oval-line"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6 plan-right">
                        @foreach([1,2,3,4,5,6, 7] as $step)
                            <div class="plan-item plan-item-{{$step}} @if($step%2===0) hidden-step @endif revealOnScroll"
                                 data-animation="{{$step%2 ? 'fadeInRight' : 'fadeInLeft'}}">
                                <p class="step-number">@lang('home.road_map_step_'.$step)</p>
                                <p class="step-date">@lang('home.road_map_step_date_'.$step)</p>
                                <p class="step-desc">@lang('home.road_map_step_desc_'.$step)</p>
                                <div class="border"></div>
                                <div class="oval">
                                    <div class="oval-small"></div>
                                </div>
                                <div class="oval-line"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</section>