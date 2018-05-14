@extends('layouts.modal',[
    'cl' => 'modal-with-image',
    'id' => 'calculatorModal',
    'title' => trans('home.map_modal_title')
])

@section('modal_body')
    <div class="map-image">
        <div class="table">
            <div class="header"><div class="col-content">@lang('home.calculator_title')</div></div>
            <div class="body">
                <div class="table-row table-row-1">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_active_atms')</div></div>
                    <div class="table-col-2"><div class="col-content">50</div></div>
                    <div class="table-col-2"><div class="col-content">100</div></div>
                    <div class="table-col-2"><div class="col-content">250</div></div>
                    <div class="table-col-2"><div class="col-content">500</div></div>
                </div>
                <div class="table-row table-row-2">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_payout_to_fractional')<span
                                    class="right">2%</span></div></div>
                    <div class="table-col-2"><div class="col-content">40,000</div></div>
                    <div class="table-col-2"><div class="col-content">80,000</div></div>
                    <div class="table-col-2"><div class="col-content">200,000</div></div>
                    <div class="table-col-2"><div class="col-content">400,000</div></div>
                </div>
                <div class="table-row table-row-1">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_num_of_miners')</div></div>
                    <div class="table-col-2"><div class="col-content">200</div></div>
                    <div class="table-col-2"><div class="col-content">400</div></div>
                    <div class="table-col-2"><div class="col-content">1,000</div></div>
                    <div class="table-col-2"><div class="col-content">2,000</div></div>
                </div>
                <div class="table-row table-row-3">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_payout_to_fractional')<span
                                    class="right">90%</span></div></div>
                    <div class="table-col-2"><div class="col-content">135,000</div></div>
                    <div class="table-col-2"><div class="col-content">270,000</div></div>
                    <div class="table-col-2"><div class="col-content">675,000</div></div>
                    <div class="table-col-2"><div class="col-content">1,350,000</div></div>
                </div>
                <div class="table-row table-row-4">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_total_payout')</div></div>
                    <div class="table-col-2"><div class="col-content">175,000</div></div>
                    <div class="table-col-2"><div class="col-content">350,000</div></div>
                    <div class="table-col-2"><div class="col-content">875,000</div></div>
                    <div class="table-col-2"><div class="col-content">1,750,000</div></div>
                </div>
                <div class="table-row table-row-5">
                    <div class="table-col-1"><div class="col-content">@lang('home.calculator_monthly_return')</div></div>
                    <div class="table-col-2"><div class="col-content">11,67%</div></div>
                    <div class="table-col-2"><div class="col-content">11,67%</div></div>
                    <div class="table-col-2"><div class="col-content">11,67%</div></div>
                    <div class="table-col-2"><div class="col-content">11,67%</div></div>
                </div>
            </div>
            <div class="table-info">
                @lang('home.table_info')
            </div>
        </div>
        <button id="closeCalculatorModal" class="close"><img src="/images/icon/x.svg"/></button>
    </div>
@overwrite

@section('modal_buttons')

@overwrite