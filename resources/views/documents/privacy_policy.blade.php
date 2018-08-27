@extends('layouts.documents', [
'kind' => 'document-page privacy-page'
])

@section('page_content')
    <section class="developers-top-section home-section center">
        <div class="shadow"></div>
        <div class="top-content">
            <div class="container">
                <div class="col-md-12">
                    <h2>PAKET Limited Privacy and Cookies Policy</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="page-down-section terms-document">
        <div class="container">
            @include('documents.privacy_policy_template')
        </div>
    </div>
@endsection