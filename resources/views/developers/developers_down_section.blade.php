<section class="developers-down-section home-section center">
    <div class="container">
        <div class="col-md-6">
            <h2>@lang('developers.list_title')</h2>
            <p class="desc">@lang('developers.list_desc')</p>
            <ul class="dotted-list">
                @foreach([1,2,3,4] as $item)
                    <li><span class="dot"></span>@lang('developers.list_item_'.$item)</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-offset-1 col-md-5">
            <img src="/images/custom/token-sale-new/laptop.png"
                 srcset="/images/custom/token-sale-new/laptop@2x.png 2x,
             /images/custom/token-sale-new/laptop@3x.png 3x"
                 class="laptop">
        </div>
        <div class="codes col-md-12">
            <div class="row">
                @foreach([1,2,3,4] as $item)
                    <div class="code-item-wrapper col-md-3">
                        <div class="code-item">
                            <h4 class="title-{{$item}}">@lang('developers.code_item_title_'.$item)</h4>
                            <button class="btn">@lang('developers.code_item_btn_'.$item)</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>