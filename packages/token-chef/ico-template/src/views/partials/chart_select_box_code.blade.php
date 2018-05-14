@if ($user)
    <div class="select-wrapper select-code">
        <select class="select2" id="{{isset($id) ? $id : 'selectBox'}}"
                data-placeholder="{{trans('ico-template::home.select_code')}}"
                data-value="{{\TokenChef\IcoTemplate\Services\StaticArray::ALL_CODES}}">
            <option value="{{\TokenChef\IcoTemplate\Services\StaticArray::ALL_CODES}}">{{trans('ico-template::home.all_links')}}</option>
            @foreach($user->referral_links as $link)
                <option value="{{$link->code}}">{{$link->code}}</option>
            @endforeach
        </select>
    </div>
@endif