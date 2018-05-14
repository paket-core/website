@extends('layouts.modal',[
    'cl' => 'modal-with-image',
    'id' => 'mapModal',
    'title' => trans('home.map_modal_title')
])

@section('modal_body')
    <div class="map-image">
        <img src="/images/custom/illus/map.png">
        <button id="closeMapModal" class="close"><img src="/images/icon/x.svg"/></button>
    </div>
@overwrite

@section('modal_buttons')

@overwrite