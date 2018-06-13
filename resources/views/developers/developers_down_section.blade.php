<section class="developers-down-section home-section center">
    <div class="container">
        <div class="col-md-12">
            <h2>@lang('developers.list_title')</h2>
            <p class="desc">@lang('developers.list_desc')</p>
        </div>
        <div class="codes col-md-12">
            <div class="row">
                @foreach([1,2,3,4] as $item)
                    <div class="code-item-wrapper col-md-6">
                        <div class="code-item">
                            <h4 class="title-{{$item}}">@lang('developers.code_item_title_'.$item)</h4>
                            <p class="desc">@lang('developers.list_item_'.$item)</p>
                            <a class="img-wrapper" href="#developers_{{$item}}">
                                <img src="/images/developers/developers_{{$item}}.png">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>