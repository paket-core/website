<form class="form register-form"
      data-validate-phone="@lang('ico-template::home.validate_phone')"
      data-validate-file="@lang('ico-template::home.validate_file')"
      data-validate-eth="@lang('ico-template::home.validate_min_eth')"
>
    @foreach($register_fields as $user_field)
        @if ($user_field=== \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_IDENTIFICATION)
            @include('ico-template::auth.identification_field', [
                       'user_field' => $user_field,
                   ])
        @else
            @include('ico-template::auth.single_field', [
           'user_field' => $user_field,
           'value' => isset($form[$user_field]) ? $form[$user_field] : null
       ])
        @endif
    @endforeach
</form>