<header class="header">

    <nav class="navbar">
        <div class="container header">

            <div class="col-md-8 col-md-offset-2">

                <div class="navbar-header">
                    <div class="inner">
                        <a class="logo" href="{{$path}}">
                            <img src="/images/logo/white_new.svg?v=qht21" class="white">
                            <img src="/images/logo/color_new.svg?v=qht21" class="color">
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="nav navbar-nav">
                        @if (!Auth::guest())
                            <li>
                                <a data-scroll href="/">
                                    @lang('home.token_sale')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{route('my-account')}}">
                                    @lang('home.my_account')
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
                                <a data-scroll href="{{$path}}#bonuses">
                                    @lang('home.presale_bonuses')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{$path}}#plan">
                                    @lang('home.plan')
                                </a>
                            </li>
                            <li>
                                <a data-scroll href="{{$path}}#team">
                                    @lang('home.team')
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