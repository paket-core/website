<section class="token-top-section home-section center">
    <div class="container">
        <div class="col-md-12 center">
            <div class="coins">
                @include('tokens.tokens_coin',['cl' => 'coin-1'])
                @include('tokens.tokens_coin',['cl' => 'coin-2'])
                @include('tokens.tokens_coin',['cl' => 'coin-3'])
                @include('tokens.tokens_coin',['cl' => 'coin-4'])
            </div>
            <div class="row content">
                <h1 class="title">@lang('tokens.tokens_title')</h1>
                <p class="desc desc-1">@lang('tokens.tokens_sub')</p>
                <p class="desc desc-2">@lang('tokens.tokens_sub_2')</p>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-md-offset-3">--}}
                    {{--<div class="counter-section">--}}
                        {{--<h1 class="title">@lang('tokens.counter_title')</h1>--}}
                        {{--@include('home.countdown')--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>