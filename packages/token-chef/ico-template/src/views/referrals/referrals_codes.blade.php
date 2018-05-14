@extends('ico-template::layouts.dashboard_portlet', [
'title' => trans('ico-template::home.my_codes_title')
])

@section('portlet_content')
    <div class="row nice-table scrollable">
        <div class="tab-pane" id="referrals" role="tabpanel">
            <table data-toggle="table" class="table" id="referralsTable">
                <thead>
                <tr>
                    <th>@lang('ico-template::home.my_codes_code')</th>
                    <th>@lang('ico-template::home.my_codes_total')</th>
                    <th>@lang('ico-template::home.my_codes_today')</th>
                    <th>@lang('ico-template::home.my_codes_yesterday')</th>
                    <th>@lang('ico-template::home.my_codes_last_week')</th>
                    <th>@lang('ico-template::home.my_codes_last_month')</th>
                    <th class="min-240">@lang('ico-template::home.my_codes_added')</th>
                    <th>@lang('ico-template::home.my_codes_code_actions')</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 center">
            <button id="createNewCode" class="btn btn-dark">
                @lang('ico-template::home.create_new_referral')
            </button>
        </div>
    </div>
    <input type="hidden" id="copyCodeMessage" value="@lang('ico-template::home.copy_code_message')">
    <input type="hidden" id="emptyCodeTableMessages" value="@lang('ico-template::home.empty_codes_message')">
    <input type="hidden" id="homeLink" value="{{env('REFERRAL_LINK')}}">
@overwrite