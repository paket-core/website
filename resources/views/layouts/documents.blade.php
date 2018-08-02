@extends('layouts.app')

@section('content')
    <?php $path = '/'?>
    <div class="page-content">
        @include('partials.header')
        <div class="{{$kind}}">
            @yield('page_content')
        </div>
        @include('partials.footer')
    </div>
@endsection


@section('styles')
@endsection