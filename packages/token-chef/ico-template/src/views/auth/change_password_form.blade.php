<form class="form change-password-form">
    @foreach($password_fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field
        ])
    @endforeach
</form>