@extends('layouts.app')

@section('content')
    <?php $path = '/'?>
    <div class="page-content">
        @include('partials.header',[
            'redirect' => true
       ])
        <div class="{{$kind}}">
            @yield('page_content')
        </div>
        @include('partials.footer')
    </div>
@endsection


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
@endsection