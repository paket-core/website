@extends('layouts.documents', [
'kind' => 'document-page'
])

@section('page_content')
    <div class="black-top-section">
        <div class="container">
            <h1>TRILLIANT <strong>“TRIL TOKEN”</strong> TERMS AND CONDITIONS</h1>
        </div>
    </div>
    <div class="page-down-section terms-document">
        <div class="container">
            @include('documents.terms_and_conditions_template')
        </div>
    </div>
@endsection