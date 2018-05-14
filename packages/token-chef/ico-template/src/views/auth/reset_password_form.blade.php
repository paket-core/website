<form class="form reset-password-form">
    @foreach($password_fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field
        ])
    @endforeach

    <input type="hidden" name="token" value="{{$token}}">
</form>