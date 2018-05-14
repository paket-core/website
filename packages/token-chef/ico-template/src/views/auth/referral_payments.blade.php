<ul class="payments referral-payments">
    <?php $no_payments = true; ?>
    <li class="payment-header">
        <div class="payment">@lang('ico-template::home.payment_user_name')</div>
        <div class="eth">@lang('ico-template::home.private_payment_amount')</div>
        <div class="tokens">@lang('ico-template::home.payment_list_tokens')</div>
        <div class="date">@lang('ico-template::home.payment_list_date')</div>
        <div class="tokens colored">@lang('ico-template::home.payment_bonus',['BONUS' => env('REFERRAL_BONUS_TOKENS',5)])</div>
    </li>
    @foreach($referrals as $referral)
        <?php $payments = $referral->payments; ?>
        @if (count($payments) >0)
            <?php $no_payments = false; ?>
            @foreach($payments as $payment)
                <li class="payment">
                    <div class="payment">{{$referral->name}}</div>
                    <div class="eth">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_in_currency($payment)}}</div>
                    <div class="tokens">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_in_tokens($payment)}}</div>
                    <div class="date">{{$payment->created_at}}</div>
                    <div class="tokens">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_referral_bonus($payment)}}</div>
                </li>
            @endforeach
        @endif
    @endforeach
    @if ($no_payments)
        <li class="no-transactions-wrapper">
            <div class="no-transactions">@lang('ico-template::home.no_transactions')</div>
        </li>
    @endif
</ul>