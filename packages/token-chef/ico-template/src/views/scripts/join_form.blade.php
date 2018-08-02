@if($join_enabled)
    @include('ico-template::scripts.form_scripts')
    @if ($config['phone_number'])
        <script data-cfasync="false" src="/vendor/ico-template/plugins/intlang/js/intlTelInput.min.js"></script>
    @endif
    @if ($config['birthday_date'])
        <script data-cfasync="false" src="/vendor/ico-template/plugins/datepicker/datepicker.min.js"></script>
    @endif
    @if ($config['selectbox'])
        <script data-cfasync="false" src="/vendor/ico-template/plugins/select2/js/select2.min.js"></script>
    @endif
    @if ($config['captcha'])
        {!! NoCaptcha::renderJs() !!}
    @endif
@endif