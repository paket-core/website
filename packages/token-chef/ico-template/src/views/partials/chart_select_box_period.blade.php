<div class="select-wrapper select-period">
    <select class="select2" id="{{isset($id) ? $id : 'selectBox'}}"
            data-placeholder="{{trans('ico-template::home.select_period')}}"
            data-value="{{\TokenChef\IcoTemplate\Services\StaticArray::PERIOD_LAST_WEEK}}">
        @foreach(\TokenChef\IcoTemplate\Services\StaticArray::PERIODS as $value => $key)
            <option value="{{$value}}">{{trans($key)}}</option>
        @endforeach
    </select>
</div>