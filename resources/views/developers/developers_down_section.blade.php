<section class="developers-down-section home-section center">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h2>@lang('developers.top_title_down')</h2>
            <p class="desc">@lang('developers.list_desc')</p>
            <ul class="dotted-list">
                @foreach($list as $item)
                    <li><span class="dot"></span><span><a data-scroll href="#{{$item->value}}">@lang('developers.list_item_title_'.$item->id)</a> – </span><span>@lang('developers.list_item_'.$item->id)</span></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>