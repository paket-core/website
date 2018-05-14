<form id="forgottenPasswordForm" class="forgotten-password-form form">

    @foreach($password_fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field
        ])
    @endforeach

    @include('ico-template::auth.recaptcha_field')

</form>