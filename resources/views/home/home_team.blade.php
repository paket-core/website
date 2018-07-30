<section class="home-section home-team center" id="team">
    <div class="container">
        <div class="col-md-12 center">
            <h2 class="title">@lang('home.team_title')</h2>
        </div>
        <div class="col-md-12 center">
            <p class="title-desc">@lang('home.team_desc')</p>
        </div>
        <div class="col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0 col-sm-12 col-sm-offset-0 center team-members-wrapper team-carousel-wrapper">

            <div class="owl-carousel-buttons nice-carousel-buttons">
                <div class="owlTeamPrevBtn">
                    <img src="/images/custom/mobile/arrow_left/arrow.png"
                         srcset="/images/custom/mobile/arrow_left/arrow@2x.png 2x,
             /images/custom/mobile/arrow_left/arrow@3x.png 3x"
                         alt="@lang('pagination.previous')"
                         class="diamond">
                </div>
                <div class="owlTeamNextBtn">
                    <img src="/images/custom/mobile/arrow_right/arrow.png"
                         srcset="/images/custom/mobile/arrow_right/arrow@2x.png 2x,
             /images/custom/mobile/arrow_right/arrow@3x.png 3x"
                         alt="@lang('pagination.next')"
                         class="diamond">
                </div>
            </div>

            <div class="row team-members owl-carousel team-carousel">
                @foreach($members as $member)
                    <div class="member col-xs-6 col-sm-4">
                        <div class="img"
                             style="background-image: url('/images/team/{{$member->image}}_m.jpeg?ver=1kx72')">
                            @if ($member->linkedin)<a class="icon-wrapper" href="{{$member->linkedin}}" target="_blank"><i
                                        class="icon icon-linkedin"></i></a>@endif
                            @if ($member->github)<a class="icon-wrapper icon-github" href="{{$member->github}}"
                                                    target="_blank"><i
                                        class="icon icon-git"></i></a>@endif
                        </div>
                        <div class="name">@lang('team.'.$member->image.'_name')</div>
                        <div class="role">
                            @lang('team.'.$member->image.'_role')
                        </div>
                        <div class="desc">
                            @lang('team.'.$member->image.'_desc')
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>