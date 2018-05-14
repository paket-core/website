<form class="form newsletter-join-form">
    @foreach($fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field,
            'placeholder' => isset($placeholders) && isset($placeholders[$user_field]) ? $placeholders[$user_field]  : null
        ])
    @endforeach
</form>