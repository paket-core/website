<section class="home-section home-about dark center">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.about_title')</h1>
        </div>
        <div class="col-md-12">
            <div class="desc desc-2">
                @lang('home.about_desc_2')
            </div>
        </div>
        <div class="col-md-12 center">
            <div class="desc">
                <ul class="dotted-list">
                    <li>
                        <span class="dot"></span><span>@lang('home.about_desc_1_li_1')</span></li>
                    <li>
                        <span class="dot"></span><span>@lang('home.about_desc_1_li_2')</span></li>
                    <li>
                        <span class="dot"></span><span>@lang('home.about_desc_1_li_3')</span></li>
                </ul>
            </div>
        </div>
        {{--<div class="col-md-12 center">--}}
        {{--<div class="video play-button">--}}
        {{--<img src="/images/screens/about_video.png">--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="col-md-12 center">
            <div class="buttons">
                <a href="{{route('token-sale')}}" target="_blank">
                    <div class="btn btn-join">@lang('home.about_btn')</div>
                </a>
            </div>
        </div>
    </div>
</section>