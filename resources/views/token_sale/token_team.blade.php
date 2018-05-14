<section class="token-section token-team center">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.team_title')</h1>
        </div>
        <div class="col-md-12 center">
            <h1 class="title-desc">@lang('home.team_desc')</h1>
        </div>
        <div class="col-md-12 center">
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
    </div>
</section>