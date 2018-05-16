<section class="token-section token-media center">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.media_title')</h1>
        </div>
        <div class="col-md-12 center">

            <section class="media companies-wrapper" id="companiesCarousel">
                <div class="owl-carousel owl-carousel-companies-mobile">
                    @for($a = 0; $a<=count($companies); $a++)
                        <div class="item">
                            @for($b = 0; $b<12; $b++)
                                @if (isset($companies[$a]))
                                    <div class="col-xs-6">
                                        <a href="{{$companies[$a]['link']}}"
                                           target="_blank">
                                            <img src="/images/logos_media_s/{{$companies[$a]['image']}}?xz13d"
                                                 srcset="/images/logos_media/{{$companies[$a]['image']}}?xz13d 2x"/>
                                        </a>
                                    </div>
                                @endif
                                <?php $a++; ?>
                            @endfor
                        </div>
                    @endfor
                </div>
            </section>

            <section class="media companies-wrapper" id="companiesList">
                @for($a = 0; $a<=count($companies); $a++)
                    <div class="row company-row {{$a>18 ? 'additional' : ''}}">
                        @for($b = 0; $b<6; $b++)
                            @if (isset($companies[$a]))
                                <div class="item col-md-2">
                                    <a href="{{$companies[$a]['link']}}"
                                       target="_blank">
                                        <img src="/images/logos_media_s/{{$companies[$a]['image']}}?xz13d"
                                             srcset="/images/logos_media/{{$companies[$a]['image']}}?xz13d 2x"/>
                                    </a>
                                </div>
                            @endif
                            <?php $a++; ?>
                        @endfor
                    </div>
                @endfor
            </section>
        </div>
        <div class="col-md-12 center">
            <a class="view-more" id="viewMoreCompanies">@lang('home.media_view_more')</a>
        </div>
    </div>
</section>