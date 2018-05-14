<form id="verificationForm" class="verification-form form">

    @if ($code)
        @include('ico-template::auth.single_field', ['user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_VERIFICATION_PASSWORD])
    @endif

    <input type="hidden" name="code" value="{{$code}}">

    @include('ico-template::auth.recaptcha_field')

</form>