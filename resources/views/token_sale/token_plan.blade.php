<section class="token-plan dark-section" id="plan">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="title">@lang('tokens.our_plan')</h2>
            <div class="row">
                <div class="plan-details">
                    <div class="col-md-6 plan-left">
                        @foreach([2,4,6] as $step)
                            <div class="plan-item revealOnScroll" data-animation="fadeInLeft">
                                <p class="step-number">@lang('tokens.token_plan_step_'.$step)</p>
                                <p class="step-date">@lang('tokens.token_plan_step_date_'.$step)</p>
                                <p class="step-desc">@lang('tokens.token_plan_step_desc_'.$step)</p>
                                <div class="border"></div>
                                <div class="oval">
                                    <div class="oval-small"></div>
                                </div>
                                <div class="oval-line"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6 plan-right">
                        @foreach([1,2,3,4,5,6] as $step)
                            <div class="plan-item @if($step%2===0) hidden-step @endif revealOnScroll"
                                 data-animation="fadeInRight">
                                <p class="step-number">@lang('tokens.token_plan_step_'.$step)</p>
                                <p class="step-date">@lang('tokens.token_plan_step_date_'.$step)</p>
                                <p class="step-desc">@lang('tokens.token_plan_step_desc_'.$step)</p>
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