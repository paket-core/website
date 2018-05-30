<section class="token-funds home-section center">
    <div class="container">
        <div class="col-md-12">
            <h2>@lang('tokens.token_funds')</h2>
        </div>
        @foreach([1,2,3,4] as $item)
            <div class="col-md-6 funds-item-wrapper">
                <div class="funds-item">
                    <p class="number">@lang('tokens.token_funds_num_'.$item)</p>
                    <p class="title">@lang('tokens.token_funds_title_'.$item)</p>
                    <p class="desc">@lang('tokens.token_funds_desc_'.$item)</p>
                </div>
            </div>
        @endforeach
    </div>
</section>