<div class="question">@lang('ico-template::home.deposit_wizard_fiat_form_title')</div>
<div class="form">
    <form class="form transfer-fiat-money-form">
        <div class="label">@lang('ico-template::home.fiat_transfer_email_address')</div>
        @include('ico-template::auth.single_field', [
                 'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_FIAT_FORM_EMAIL_ADDRESS,
                 'value' => isset($form['email']) ? $form['email'] : null
         ])
        <div class="label">@lang('ico-template::home.fiat_transfer_invest_amount')</div>
        @include('ico-template::auth.fiat_invest_amount')
    </form>
</div>
<div class="help">
    <p>@lang('ico-template::home.deposit_wizard_fiat_form_help')</p>
</div>
<div class="buttons">
    <button class="btn btn-dark form-button transfer-fiat-money-form-btn loading-hide">@lang('ico-template::home.deposit_wizard_fiat_form_button')</button>
    @include('ico-template::partials.loading_button')
</div>