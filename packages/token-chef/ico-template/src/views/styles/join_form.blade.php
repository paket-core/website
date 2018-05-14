@if($join_enabled)
    @if ($config['phone_number'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/intlang/css/intlTelInput.css">
    @endif
    @if ($config['birthday_date'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/datepicker/datepicker.min.css">
    @endif
    @if ($config['checkbox'])
        <link type="text/css" rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    @endif
    @if ($config['selectbox'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css">
    @endif
    @include('ico-template::styles.form_styles')
@endif
