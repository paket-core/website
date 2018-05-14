<form class="form join-form"
      data-validate-phone="@lang('ico-template::home.validate_phone')"
      data-validate-file="@lang('ico-template::home.validate_file')"
      data-validate-eth="@lang('ico-template::home.validate_min_eth')"
>
    @foreach($join_fields as $user_field)
        @include('ico-template::auth.single_field', [
            'user_field' => $user_field,
            'config' => $config
        ])
    @endforeach
</form>