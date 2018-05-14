<footer>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="img">
                        <img src="/images/logo/white_new.svg?v=qht21" class="white">
                        <img src="/images/logo/color_new.svg?v=qht21" class="color">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <ul>
                        <li>
                            <a data-scroll href="{{$path}}#about-us">
                                @lang('home.footer_about_us')
                            </a>
                        </li>
                        <li>
                            <a data-scroll href="{{$path}}#team">
                                @lang('home.footer_meet_team')
                            </a>
                        </li>
                        <li>
                            <a data-scroll href="{{$path}}#platform">
                                @lang('home.footer_platform')
                            </a>
                        </li>
                        <li>
                            <a href="/sign-up">
                                @lang('home.footer_sign_up')
                            </a>
                        </li>
                        <li>
                            <a href="/faq">
                                @lang('home.footer_faq')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-6">
                    <ul>
                        <li>
                            <a href="/privacy-policy">
                                @lang('home.footer_privacy_policy')
                            </a>
                        </li>
                        <li>
                            <a href="/terms-of-sale">
                                @lang('home.footer_terms_of_sale')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 copyright">
                    @lang('home.footer_copyright')
                </div>
            </div>
        </div>
    </div>
</footer>