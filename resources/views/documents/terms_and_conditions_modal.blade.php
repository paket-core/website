@extends('layouts.modal', [
'cl' => 'document-modal document-page',
'id' => 'termsModal',
'title' => trans('home.terms_and_condition_modal_title')
])

@section('modal_body')
    <div class="col-md-12">
        <div class="black-top-section">
            <div class="container">
                <h1>PAKET - TERMS AND CONDITIONS</h1>
            </div>
            <span class="modal-close icon-close" data-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="terms-document">
            <div class="container">
                @include('documents.terms_and_conditions_template')
            </div>
        </div>
    </div>
@endsection