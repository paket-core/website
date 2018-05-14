@extends('ico-template::layouts.dashboard_portlet', [
'title' => trans('ico-template::home.statistics_total_verified')
])

@section('portlet_content')
    <div class="row">
        <div class="col-sm-4 icon-wrapper">
            <i class="fa fa-money"></i>
        </div>
        <div class="col-sm-8 sum-wrapper">
            <p class="stats" id="statsTotalVerified"></p>
        </div>
    </div>
@overwrite