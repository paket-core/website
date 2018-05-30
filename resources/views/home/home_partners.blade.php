<section class="home-section home-partners center">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.partners_title')</h1>
        </div>
        <div class="col-md-12 center">
{{--            <p class="title-desc">@lang('home.partners_desc')</p>--}}
        </div>
        <div class="col-md-12 center">
            <div class="partners">
                @foreach($partners as $partner)
                    <div class="partner">
                        <img src="/images/partners/{{$partner->image}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>