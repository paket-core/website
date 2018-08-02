@extends('layouts.app')

@section('custom_meta')

@endsection

@section('content')
    <?php $path = '/'?>
    <div class="page-content header-dark">
        @include('partials.header')
        <div class="my-account top">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#my-account" data-toggle="tab">@lang('client_panel.tab_my_account')</a>
                        </li>
                        <li>
                            <a href="#referrals" data-toggle="tab">@lang('client_panel.tab_refer_friends')</a>
                        </li>
                        <li>
                            <a href="#my-transactions" data-toggle="tab">@lang('client_panel.tab_transactions')</a>
                        </li>
                        <li>
                            <a href="#change-password" data-toggle="tab">@lang('client_panel.tab_change_password')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="my-account down">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="my-account">
                            @if(\App\Services\ICOService::check_invested())
                                <div class="thanks-investing">
                                    <h2>@lang('client_panel.thanks_for_investing')</h2>
                                    <p>@lang('client_panel.thanks_for_investing_desc')</p>
                                    <p><strong>@lang('client_panel.thanks_for_investing_balance')</strong></p>
                                    <p class="balance">
                                        <strong>{{\App\Services\ICOService::get_invested_tokens()}}</strong></p>
                                </div>
                            @endif
                            @if(\App\Services\ICOService::check_kyc_fill())
                                @if(\App\Services\ICOService::check_rejected())
                                    <h2>@lang('client_panel.tab_fix_kyc_title')</h2>
                                    <p>@lang('client_panel.tab_fix_kyc_desc')</p>
                                @else
                                    <h2>@lang('client_panel.tab_fill_kyc_title')</h2>
                                    <p>@lang('client_panel.tab_fill_kyc_desc')</p>
                                @endif
                                <div class="register-section form-wrapper">
                                    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_register_form(Auth::user()->toArray()) !!}
                                    <button class="btn btn-dark form-button register-form-btn loading-hide">@lang('auth.register_button')</button>
                                    @include('partials.loading_button')
                                </div>
                            @elseif(\App\Services\ICOService::check_submitted())
                                <h2>@lang('client_panel.tab_submitted_title')</h2>
                                <p>@lang('client_panel.tab_submitted_desc')</p>
                            @else

                                <div class="deposit-kind">
                                    <div class="deposit-left">
                                        <div class="deposit-title">@lang('client_panel.user_deposit_private_eth_title')</div>
                                        <div class="deposit-image"><img src="/images/invest_app/eth_coin.png"/></div>
                                    </div>
                                    <div class="deposit-right">
                                        <div class="deposit-desc">
                                            <?php $deposit = \App\Services\ICOService::get_user_deposit(\TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_KIND_ETH);?>
                                            @if ($deposit)
                                                @if ($deposit->deposit_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_PAID)
                                                    <p class="payment-status paid">@lang('client_panel.eth_deposit_payment_paid')</p>
                                                @endif
                                                <p class="payment-status">@lang('client_panel.eth_deposit_payment_pending',[
                                        'ETH_ADDRESS' => '<br/><strong>'.$deposit->deposit_address . '</strong><br/>'
                                    ])</p>
                                                <div class="copy-address-wrapper">
                                                    <input type="text" disabled class="copy-address"
                                                           value="{{$deposit->deposit_address}}">
                                                    <span data-clipboard-text="{{$deposit->deposit_address}}"
                                                          class="btn-copy">@lang('client_panel.copy')
                                                        <i class="fa fa-copy"></i></span>
                                                </div>
                                            @else
                                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_deposit_wizard_private_eth_deposit() !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="deposit-kind">
                                    <div class="deposit-left">
                                        <div class="deposit-title">@lang('client_panel.user_deposit_private_btc_title')</div>
                                        <div class="deposit-image"><img src="/images/invest_app/btc_coin.png"/></div>
                                    </div>
                                    <div class="deposit-right">
                                        <div class="deposit-desc">
                                            <?php $deposit = \App\Services\ICOService::get_user_deposit(\TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_KIND_BTC);?>
                                            @if ($deposit)
                                                @if ($deposit->deposit_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_PAID)
                                                    <p class="payment-status paid">@lang('client_panel.btc_deposit_payment_paid')</p>
                                                @endif
                                                <p class="payment-status">@lang('client_panel.btc_deposit_payment_pending',[
                                        'BTC_ADDRESS' => '<br/><strong>'.$deposit->deposit_address . '</strong><br/>'
                                    ])</p>
                                                <div class="copy-address-wrapper">
                                                    <input type="text" disabled class="copy-address"
                                                           value="{{$deposit->deposit_address}}">
                                                    <span data-clipboard-text="{{$deposit->deposit_address}}"
                                                          class="btn-copy">@lang('client_panel.copy')
                                                        <i class="fa fa-copy"></i></span>
                                                </div>
                                            @else
                                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_deposit_wizard_private_btc_deposit() !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="deposit-kind">
                                    <div class="deposit-left">
                                        <div class="deposit-title">@lang('client_panel.user_deposit_private_fiat_title')</div>
                                        <div class="deposit-image"><img src="/images/invest_app/money.png"/></div>
                                    </div>
                                    <div class="deposit-right">
                                        <div class="deposit-desc">
                                            <?php $deposit = \App\Services\ICOService::get_user_deposit(\TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_KIND_FIAT);?>
                                            @if ($deposit)

                                                <?php $payment_status = $deposit->deposit_status;?>
                                                @if($payment_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_PENDING)
                                                    <p class="payment-status veryfing">@lang('client_panel.fiat_payment_pending_veryfing')</p>
                                                    <p class="payment-status">@lang('client_panel.fiat_payment_pending')</p>
                                                @elseif($payment_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_ACCEPTED)
                                                    <p class="payment-status">@lang('client_panel.fiat_payment_approved')</p>
                                                @elseif($payment_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_REJECTED)
                                                    <p class="payment-status">@lang('client_panel.fiat_payment_rejected')</p>
                                                @elseif($payment_status === \TokenChef\IcoTemplate\Services\StaticArray::USER_DEPOSIT_STATUS_PAID)
                                                    <p class="payment-status paid">@lang('client_panel.fiat_payment_paid')</p>
                                                @endif

                                            @else
                                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_deposit_wizard_private_fiat_payment(['form' => ['email' => Auth::user()->email]]) !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @if(\App\Services\ICOService::check_invest_enabled())
                                    <div class="create-deposit-section form-wrapper">
                                        @if (Auth::user()->whitelisting_status === \TokenChef\IcoTemplate\Services\StaticArray::WHITELISTING_STATUS_PENDING)
                                            <h2>@lang('client_panel.please_wait_we_are_whitelisting')</h2>
                                        @elseif (Auth::user()->eth_address_kind === \TokenChef\IcoTemplate\Services\StaticArray::ETH_KIND_DEPOSIT)
                                            <h2>@lang('client_panel.please_transfer_deposit_title')</h2>
                                            <p>@lang('client_panel.please_transfer_deposit_desc')</p>
                                            <div class="copy-address-wrapper">
                                                <input type="text" disabled class="copy-address"
                                                       value="{{Auth::user()->deposit_address}}">
                                                <span data-clipboard-text="{{Auth::user()->deposit_address}}"
                                                      class="btn-copy">@lang('client_panel.copy')<i
                                                            class="fa fa-copy"></i></span>
                                            </div>
                                            <div class="refresh-deposit-status-wrapper">
                                                <button class="btn btn-dark refresh-deposit-status loading-hide"
                                                        data-trans="@lang('client_panel.please_wait')">
                                                    @lang('client_panel.refresh_invest_status')
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                                @include('partials.loading_button')
                                            </div>
                                        @else
                                            @if (Auth::user()->whitelisting_status === \TokenChef\IcoTemplate\Services\StaticArray::WHITELISTING_STATUS_DONE)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2>@lang('client_panel.please_transfer_title')</h2>
                                                        <p>@lang('client_panel.please_transfer_desc',[
                                                        'ETH_ADDRESS' => '<br/><strong>'.(\Illuminate\Support\Facades\Auth::user()->deposit_address). '</strong><br/>'
                                                     ])</p>
                                                        <div class="copy-address-wrapper">
                                                            <input type="text" disabled class="copy-address"
                                                                   value="{{env('ETH_CROWD_SALE')}}">
                                                            <span data-clipboard-text="{{env('ETH_CROWD_SALE')}}"
                                                                  class="btn-copy">@lang('client_panel.copy')
                                                                <i class="fa fa-copy"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="send-from">@lang('client_panel.please_transfer_desc_warning',['ETH_ADDRESS' => Auth::user()->deposit_address])</p>
                                                    </div>
                                                </div>
                                            @else
                                                <h2>@lang('client_panel.please_wait_we_are_whitelisting')</h2>
                                            @endif
                                        @endif
                                        <input type="hidden" id="copyText" value="@lang('client_panel.copy_text')">
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div class="tab-pane" id="referrals">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>@lang('client_panel.tab_refer_friends_title')</h2>
                                </div>
                                @if(\App\Services\ICOService::check_referral_link_created())
                                    <div class="simple-referral">
                                        <div class="col-md-12">
                                            <p class="desc">@lang('client_panel.create_new_referral_code_created_desc')</p>
                                            <?php $link = \App\Services\ICOService::get_referral_link() ?>
                                            <div class="copy-address-wrapper">
                                                <input type="text" disabled class="copy-address"
                                                       value="{{$link}}">
                                                <span data-clipboard-text="{{$link}}"
                                                      class="btn-copy">@lang('client_panel.copy')<i
                                                            class="fa fa-copy"></i></span>
                                            </div>
                                            <div class="social-share-section" data-url="{{$link}}"
                                                 data-text="@lang('client_panel.social_share_text',[
                                                    'LINK' => '<br/>'
                                                 ])">
                                                <div id="share"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 referral-dashboard">
                                            <div class="row">
                                                {!!  \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_chart_portlet()!!}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-12">
                                        <p class="desc">@lang('client_panel.create_new_referral_code_desc')</p>
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-dark form-button loading-hide create-new-referral-link-btn">@lang('client_panel.create_new_referral_code')</button>
                                                        @include('partials.loading_button')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="my-transactions">
                            <h2>@lang('client_panel.tab_transactions')</h2>
                            <div class="payments-wrapper">
                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_user_payments(Auth::user()) !!}
                            </div>
                        </div>
                        <div class="tab-pane" id="change-password">
                            <h2>@lang('client_panel.tab_change_password_title')</h2>
                            <div class="form-wrapper">
                                {!! \TokenChef\IcoTemplate\Services\WidgetService::get_change_password_form() !!}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-dark form-button loading-hide change-password-form-btn">@lang('client_panel.change_password_button')</button>
                                            @include('partials.loading_button')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="/plugins/animate/css/animate.min.css">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_register_css() !!}
    @if(\App\Services\ICOService::check_referral_link_created())
        {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_dashboard_css() !!}
    @endif
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
@endsection

@section('scripts')
    <script src="/plugins/select2/js/select2.min.js"
            integrity="sha384-xMX6VHK1HYyCMM8zHAVkLHgg2rIDhN01+z4rI70RV2dwzzVlHP95uaDOc5ds7Pow"
            crossorigin="anonymous"></script>
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_app_js() !!}
    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_register_js() !!}
    @if(\App\Services\ICOService::check_deposit_create_enabled())
        {!! \TokenChef\IcoTemplate\Services\WidgetService::get_web3_plugin() !!}
    @endif
    <script data-cfasync="false" src="/plugins/clipboard/js/clipboard.min.js"
            integrity="sha384-cV+rhyOuRHc9Ub/91rihWcGmMmCXDeksTtCihMupQHSsi8GIIRDG0ThDc3HGQFJ3"
            crossorigin="anonymous"></script>
    @if(\App\Services\ICOService::check_referral_link_created())
        {!! \TokenChef\IcoTemplate\Services\WidgetService::get_referrals_dashboard_js() !!}
    @endif
@endsection