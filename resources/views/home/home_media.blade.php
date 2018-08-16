<section class="home-section home-media center">
    <div class="container">
        <div class="col-md-12 center">
            <h2 class="title">@lang('home.media_title')</h2>
        </div>
        <div class="col-md-12 center">
            <div class="quote-wrapper animated" id="quoteWrapper">
                <p class="quote">
                    the PAKET platform will allow anyone from anywhere in the world to ship items quickly and optimally
                    using the trustless nature afforded by the blockchain and smart contract technologies.
                </p>
                <p class="quote-company">
                    Market Insider
                </p>
            </div>
        </div>
        <div class="col-md-12 center">

            <section class="media companies-wrapper" id="companiesList">
                <div class="media-carousel owl-carousel">
                    @for($a = 0; $a<=count($companies); $a++)
                        @if (count($companies) > 18)
                            <div class="row company-row {{$a>18 ? 'additional' : ''}}"> @endif
                                @for($b = 0; $b<4; $b++)
                                    @if (isset($companies[$a]))
                                        <div class="item col-md-3 col-sm-3">
                                            <a href="{{$companies[$a]['link']}}"
                                               target="_blank">
                                                <span class="quote">"{!!$companies[$a]['quote']!!}"</span>
                                                <span class="quote-company">{{$companies[$a]['company']}}</span>
                                                <img src="/images/logos_media_s/{{$companies[$a]['image']}}?xz13d"
                                                     srcset="/images/logos_media/{{$companies[$a]['image']}}?xz13d 2x"/>
                                            </a>
                                        </div>
                                    @endif
                                    <?php $a++; ?>
                                @endfor
                                @if (count($companies) > 18) </div> @endif
                    @endfor
                </div>
            </section>
        </div>
        @if (count($companies) > 18)
            <div class="col-md-12 center">
                <a class="view-more" id="viewMoreCompanies">@lang('home.media_view_more')</a>
            </div>
        @endif
    </div>
</section>