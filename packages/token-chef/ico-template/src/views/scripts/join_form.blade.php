@if($join_enabled)
    @include('ico-template::scripts.form_scripts')
    @if ($config['phone_number'])
        <script data-cfasync="false" src="/vendor/ico-template/plugins/intlang/js/intlTelInput.min.js"></script>
    @endif
    @if ($config['birthday_date'])
        <script data-cfasync="false" src="/vendor/ico-template/plugins/datepicker/datepicker.min.js"></script>
    @endif
    @if ($config['selectbox'])
        <script data-cfasync="false" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"
                integrity="sha384-XNUB/UFkuWNhKh/r4dgAc1pHxSDakhZCLINq/GXEwDg0UES32263XRXSCS36IYCp"
                crossorigin="anonymous"></script>
    @endif
    @if ($config['captcha'])
        {!! NoCaptcha::renderJs() !!}
    @endif
@endif