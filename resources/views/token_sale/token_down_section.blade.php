<section class="token-down-section down-section center">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="token-title">@lang('tokens.pre_sale_title')</h1>
        </div>
        <div class="col-md-12 center">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="countdown">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="item">
                                <div class="counter days">36</div>
                                <div class="title">Days</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="item">
                                <div class="counter hours">10</div>
                                <div class="title">Hours</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="item">
                                <div class="counter minutes">7</div>
                                <div class="title">Minutes</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="item">
                                <div class="counter seconds">51</div>
                                <div class="title">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="token-sale-updates">
        <div class="token-sale-update token-sale-update-1">
            <div class="title">@lang('tokens.pre_sale_learn_title')</div>
            <div class="desc">@lang('tokens.pre_sale_learn_desc')</div>
            <div class="btn btn-update-1">@lang('tokens.pre_sale_learn_btn')</div>
        </div>
        <div class="token-sale-update token-sale-update-2">
            <div class="title">@lang('tokens.pre_sale_updates_title')</div>
            <div class="desc">@lang('tokens.pre_sale_updates_desc')</div>
            <div class="input">
                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_newsletter_form([
      'newsletter_email' => trans('tokens.pre_sale_updates_input')
      ]) !!}
                <div class="btn-wrapper">
                    <button class="sub-btn btn subscribe-button newsletter-join-form-btn">
                        >
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>