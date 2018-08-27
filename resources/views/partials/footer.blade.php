<footer>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-12 title">
                    @lang('home.footer_follow_title')
                </div>
                <div class="col-md-12 social">
                    @include('partials.social')
                </div>
                <div class="col-md-12 copyright">
                    @lang('home.footer_copyright')
                </div>
                <div class="col-md-12 documents">
                    <ul>
                        <li>
                            <a href="/privacy-policy">
                                @lang('home.footer_privacy_policy')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>