<form class="form login-form">
    @foreach($login_fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field,
            'config' => $config,
            'field' => 'LoginField'
        ])
    @endforeach
</form>