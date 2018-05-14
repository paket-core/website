<div class="select-wrapper select-fiat-amount">
    <select class="select2" id="{{isset($id) ? $id : 'selectBox'}}"
            name="{{\TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_FIAT_FORM_AMOUNT}}"
            data-placeholder="{{trans('ico-template::home.select_fiat_amount')}}"
            data-value="{{\TokenChef\IcoTemplate\Services\StaticArray::FIAT_SELECT_VALUE_1}}">
        @foreach(\TokenChef\IcoTemplate\Services\StaticArray::FIAT_SELECT_VALUES as $value => $period)
            <option value="{{$value}}">{{$period}}</option>
        @endforeach
    </select>
</div>