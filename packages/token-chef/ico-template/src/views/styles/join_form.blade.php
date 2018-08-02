@if($join_enabled)
    @if ($config['phone_number'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/intlang/css/intlTelInput.css">
    @endif
    @if ($config['birthday_date'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/datepicker/datepicker.min.css">
    @endif
    @if ($config['checkbox'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/pretty-checkbox/css/pretty-checkbox.min.css"/>
    @endif
    @if ($config['selectbox'])
        <link rel="stylesheet" href="/vendor/ico-template/plugins/select2/css/select2.min.css">
    @endif
    @include('ico-template::styles.form_styles')
@endif
