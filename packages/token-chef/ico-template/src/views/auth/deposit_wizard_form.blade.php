<div class="form deposit-wizard-form">
    @if (\TokenChef\IcoTemplate\Services\ICOSettingsService::check_fiat_enabled())
        <div class="step step-1">
            <div class="question">@lang('ico-template::home.deposit_wizard_fiat_currency_question')</div>
            <div class="choices">
                <div class="choice" data-next-step="10">
                    <p class="choice-title">@lang('ico-template::home.deposit_wizard_fiat_currency_yes')</p>
                    <img src="/images/invest_app/money.png"/>
                </div>
                <div class="choice" data-next-step="20">
                    <p class="choice-title">@lang('ico-template::home.deposit_wizard_fiat_currency_no')</p>
                    <img src="/images/invest_app/crypto.png"/>
                </div>
            </div>
            <div class="help">
                <p>@lang('ico-template::home.deposit_wizard_fiat_currency_help')</p>
            </div>
        </div>

        <div class="step step-10 hidden">
            @include('ico-template::home.deposit_wizard_private_fiat_payment')
            <div class="go-back">
                <button class="btn btn-back">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

    @endif
    <div class="step step-20 @if (\TokenChef\IcoTemplate\Services\ICOSettingsService::check_fiat_enabled()) hidden @endif">
        <div class="question">@lang('ico-template::home.deposit_wizard_cryptocurrency_question')</div>
        <div class="choices small-choices">
            <div class="choice" data-next-step="31">
                <p class="choice-title">@lang('ico-template::home.deposit_wizard_cryptocurrency_eth')</p>
                <img src="/images/invest_app/eth_coin.png"/>
            </div>
            <div class="choice" data-next-step="24">
                <p class="choice-title">@lang('ico-template::home.deposit_wizard_cryptocurrency_btc')</p>
                <img src="/images/invest_app/btc_coin.png"/>
            </div>
            @if (!\TokenChef\IcoTemplate\Services\ICOSettingsService::use_generated_deposits())
                <div class="choice" data-next-step="22">
                    <p class="choice-title">@lang('ico-template::home.deposit_wizard_cryptocurrency_others')</p>
                    <img src="/images/invest_app/crypto_others.png"/>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="go-back">
                    <button class="btn btn-back">
                        @lang('ico-template::home.deposit_wizard_go_back')
                    </button>
                </div>
            </div>
        </div>
    </div>

    @if (\TokenChef\IcoTemplate\Services\ICOSettingsService::use_generated_deposits())

        <div class="step step-31 hidden">
            @include('ico-template::home.deposit_wizard_private_eth_deposit')
            <div class="go-back">
                <button class="btn btn-back" data-prev-step="20">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

        <div class="step step-24 hidden">
            @include('ico-template::home.deposit_wizard_private_btc_deposit')
            <div class="go-back">
                <button class="btn btn-back" data-prev-step="20">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

    @else

        <div class="step step-31 hidden">
            <div class="question">@lang('ico-template::home.deposit_wizard_ethereum_question')</div>
            <div class="choices">
                <div class="choice" data-next-step="21">
                    <p class="choice-title">@lang('ico-template::home.deposit_wizard_ethereum_wallet')</p>
                    <img src="/images/invest_app/wallet.png"/>
                </div>
                <div class="choice" data-next-step="22">
                    <p class="choice-title">@lang('ico-template::home.deposit_wizard_ethereum_deposit')</p>
                    <img src="/images/invest_app/deposit.png"/>
                </div>
            </div>
            <div class="go-back">
                <button class="btn btn-back" data-prev-step="20">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

        <div class="step step-21 hidden">
            <div class="question">@lang('ico-template::home.deposit_wizard_own_wallet_provide_address')</div>
            <div class="form">
                <form class="form own-eth-form">
                    @include('ico-template::auth.single_field', [
                             'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_OWN_ETH_ADDRESS
                     ])
                </form>
            </div>
            <div class="help">
                <p>@lang('ico-template::home.deposit_wizard_own_wallet_provide_address_help')</p>
            </div>
            <div class="buttons">
                <button class="btn btn-dark form-button own-eth-form-btn loading-hide">@lang('ico-template::home.save_own_eth_button')</button>
                @include('ico-template::partials.loading_button')
            </div>
            <div class="go-back">
                <button class="btn btn-back" data-prev-step="20">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

        <div class="step step-22 hidden">
            <div class="question">@lang('ico-template::home.deposit_wizard_cryptocurrency_set_password')</div>
            <div class="form">
                <form class="form create-deposit-form">
                    @include('ico-template::auth.single_field', [
                             'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_DEPOSIT_PASSWORD
                     ])
                    @include('ico-template::auth.single_field', [
                             'user_field' => \TokenChef\IcoTemplate\Services\StaticArray::USER_FIELD_DEPOSIT_PASSWORD_CONFIRMATION
                     ])
                    <p class="help">@lang('ico-template::home.deposit_password_help')</p>
                </form>
                <div class="buttons">
                    <button class="btn btn-dark form-button create-deposit-form-btn loading-hide">@lang('ico-template::home.create_deposit_button')</button>
                    @include('ico-template::partials.loading_button')
                </div>
            </div>
            <div class="go-back">
                <button class="btn btn-back" data-prev-step="20">
                    @lang('ico-template::home.deposit_wizard_go_back')
                </button>
            </div>
        </div>

    @endif


</div>