<section class="home-section home-team center" id="team">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.team_title')</h1>
        </div>
        <div class="col-md-12 center">
            <h1 class="title-desc">@lang('home.team_desc')</h1>
        </div>
        <div class="col-md-12 center team-members-wrapper">
            <div class="row team-members">
                @foreach($members as $member)
                    <div class="member col-md-3">
                        <div class="img"
                             style="background-image: url('/images/team/{{$member->image}}.jpg?ver=1ax31')">
                        </div>
                        <div class="name">{{$member->name}}</div>
                        <div class="role">{{$member->role}}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="team-carousel-wrapper team-members">

            <div class="owl-carousel team-carousel">
                @foreach($members as $member)
                    <div class="member">
                        <div class="img"
                             style="background-image: url('/images/team/{{$member->image}}.jpg?ver=1ax31')">
                        </div>
                        <div class="name">{{$member->name}}</div>
                        <div class="role">{{$member->role}}</div>
                    </div>
                @endforeach
            </div>

            <div class="owl-carousel-buttons nice-carousel-buttons">
                <div class="owlTeamPrevBtn">
                    <img src="/images/custom/mobile/arrow_left/arrow.png"
                         srcset="/images/custom/mobile/arrow_left/arrow@2x.png 2x,
             /images/custom/mobile/arrow_left/arrow@3x.png 3x"
                         class="diamond">
                </div>
                <div class="owlTeamNextBtn">
                    <img src="/images/custom/mobile/arrow_right/arrow.png"
                         srcset="/images/custom/mobile/arrow_right/arrow@2x.png 2x,
             /images/custom/mobile/arrow_right/arrow@3x.png 3x"
                         class="diamond">
                </div>
            </div>
        </div>
    </div>
</section>