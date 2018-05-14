@extends('ico-template::layouts.dashboard_portlet', [
'title' => trans('ico-template::home.statistics_total_views')
])

@section('portlet_content')
    <div class="row ">
        <div class="col-sm-4 icon-wrapper">
            <i class="fa fa-eye"></i>
        </div>
        <div class="col-sm-8 sum-wrapper">
            <p class="stats" id="statsTotalViews"></p>
        </div>
    </div>
@overwrite