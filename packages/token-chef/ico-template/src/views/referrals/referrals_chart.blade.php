@extends('ico-template::layouts.dashboard_portlet', [
'title' => trans('ico-template::home.statistics_views')
])

@section('portlet_content')
    <div class="row referrals-chart-wrapper">
        <div class="loading-chart">
            <div class="select-boxes col-md-12">
                @include('ico-template::partials.chart_select_box_period', ['id'=> 'referralStatisticsPeriodSelect'])
                @include('ico-template::partials.chart_select_box_code', [
                'id'=> 'referralStatisticsCodeSelect',
                'user'=> Auth::user()])
            </div>
            @include('ico-template::partials.loading')
            <canvas id="statisticsWeekChart"></canvas>
        </div>
    </div>
@overwrite