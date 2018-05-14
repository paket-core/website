<div class="team center" id="team">
    <div class="container flip-section">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="team-title">@lang('home.meet_team_title')</h2>
            <div class="row">
                @foreach($members as $member)
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="team-member">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="img"
                                             style="background-image: url('/images/team/{{$member->name}}.jpg?ver=1ax31')">
                                        </div>
                                        <div class="name">
                                            @lang('home.meet_team_name_'.$member->name)
                                        </div>
                                        <div class="role">
                                            @lang('home.meet_team_role_'.$member->name)
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="desc">
                                            @lang('home.meet_team_desc_'.$member->name)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="linkedin-logo">
                                @if ($member->linkedin)
                                    <a href="https://www.linkedin.com/in/{{$member->linkedin}}" target="_blank">
                                        <img src="/images/custom/icon/linkedin.svg">
                                    </a>
                                @endif
                            </div>
                            <div class="shadow"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>