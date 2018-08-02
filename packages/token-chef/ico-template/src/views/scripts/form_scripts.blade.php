<script src="/vendor/ico-template/plugins/jquery-validate/js/jquery.validate.min.js"></script>
<script src="/vendor/ico-template/plugins/jquery-validate/js/additional-methods.min.js"></script>
<script src="/vendor/ico-template/plugins/toastr/js/toastr.min.js"></script>

@if(isset($captcha) && $captcha)
    {!! NoCaptcha::renderJs() !!}
@endif