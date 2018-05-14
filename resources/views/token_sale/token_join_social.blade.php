<section class="join-social">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-7 join-social-left">
                    <h2 class="join-social-title">@lang('tokens.join_social_title', [
                        'BREAK' => '<br/>'
                    ])</h2>
                    <p class="join-social-subtitle">@lang('tokens.join_social_desc')</p>
                    <div class="social-icons">
                        @foreach(['slack','github', 'medium', 'telegram', 'twitter'] as $icon)
                            <a>
                                <span class="back"></span>
                                <img src="/images/custom/social/{{$icon}}.svg"/>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="/images/custom/illustration/laptop.svg" class="social-img"/>
                </div>
            </div>
        </div>
    </div>
</section>