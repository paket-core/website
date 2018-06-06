<section class="home-section home-endorsements center section-dark">
    <div class="container">
        <div class="col-md-12 center">
            <h1 class="title">@lang('home.endorsements_title')</h1>
        </div>
        <div class="col-md-12 center">
            <div class="endorsements">
                @foreach($endorsements as $endorsement)
                    <div class="endorsement col-md-3">
                        <h3>{{$endorsement->name}}</h3>
                        <p class="role">{{$endorsement->role}}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 center">
            <p class="desc">@lang('home.endorsements_desc')</p>
        </div>
        <div class="col-md-12 center link">
            <a href="/pdf/endorsement.pdf" target="_blank">
                <button class="btn btn-blue">
                    @lang('home.endorsements_link')
                </button>
            </a>
        </div>
    </div>
</section>