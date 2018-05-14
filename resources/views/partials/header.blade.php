<header class="header">

    <nav class="navbar">
        <div class="container header">

            <div class="col-md-8 col-md-offset-2">

                <div class="navbar-header">
                    <div class="inner">
                        <a class="logo" href="{{$path}}">
                            <img src="/images/logo/paket-logo.png"
                                 srcset="/images/logo/paket-logo@2x.png 2x,/images/logo/paket-logo@3x.png 3x"
                                 class="paket-logo">
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="nav navbar-nav">
                        @if (!Auth::guest())
                            <li>
                                <a data-scroll href="/">
                                    @lang('home.header_token_sale')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{route('my-account')}}">
                                    @lang('home.header_my_account')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('home.logout')</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">{{ csrf_field() }}</form>
                            </li>
                        @else
                            <li>
                                <a data-scroll href="{{$path}}#product">
                                    @lang('home.header_product_info')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{$path}}#team">
                                    @lang('home.header_our_team')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{$path}}#token-sale">
                                    @lang('home.header_token_sale')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{$path}}#developers">
                                    @lang('home.header_for_developers')
                                </a>
                            </li>
                            <li>
                                <a href="{{route('login')}}">
                                    @lang('home.login')
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>