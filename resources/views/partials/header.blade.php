<?php $path = App::getLocale() === 'en' ? '/' : '/' . App::getLocale() . '/'; ?>
<header class="header">

    <nav class="navbar">
        <div class="container header">

            <div class="col-md-12">

                <div class="navbar-header">
                    <div class="inner">
                        <a class="logo" href="{{$path}}">
                            <img src="/images/logo/paket-logo.png"
                                 srcset="/images/logo/paket-logo@2x.png 2x,/images/logo/paket-logo@3x.png 3x"
                                 alt="{{env('APP_NAME')}}"
                                 class="paket-logo">
                        </a>
                    </div>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="language-wrapper">
                    @include('partials.language')
                </div>
                <div class="collapse navbar-collapse" id="topNav">
                    <div class="social-wrapper">
                        @include('partials.social')
                    </div>
                    <ul class="nav navbar-nav">
                        @if (!Auth::guest())
                            <li>
                                <a href="/token-sale">
                                    @lang('home.header_token_sale')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="/my-account">
                                    @lang('home.header_my_account')
                                </a>
                            </li>
                            <li>
                                <a href="/logout"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('home.header_logout')</a>
                                <form id="logout-form" action="/logout" method="POST"
                                      style="display: none;">{{ csrf_field() }}</form>
                            </li>
                        @else
                            <li>
                                <a data-scroll href="{{$path}}#product">
                                    @lang('home.header_product_info')
                                </a>
                            </li>
                            <li class="sub-li">
                                <a data-scroll href="{{$path}}#team">
                                    @lang('home.header_our_team')
                                </a>
                            </li>
                            <li>
                                <a href="{{$path}}token-sale">
                                    @lang('home.header_token_sale')
                                </a>
                            </li>
                            <li>
                                <a href="{{$path}}developers">
                                    @lang('home.header_for_developers')
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>