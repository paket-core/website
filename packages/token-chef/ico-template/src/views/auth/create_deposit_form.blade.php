<form class="form create-deposit-form">
    @include('ico-template::auth.single_field', [
             'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_DEPOSIT_PASSWORD
     ])
    @include('ico-template::auth.single_field', [
             'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_DEPOSIT_PASSWORD_CONFIRMATION
     ])
    <p class="help">@lang('ico-template::home.deposit_password_help')</p>
</form>