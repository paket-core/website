@extends('layouts.documents', [
'kind' => 'document-page'
])

@section('page_content')
    <div class="black-top-section">
        <div class="container">
            <h1>Paket Privacy Policy & Data Protection</h1>
        </div>
    </div>
    <div class="page-down-section terms-document">
        <div class="container">
            @include('documents.privacy_policy_template')
        </div>
    </div>
@endsection