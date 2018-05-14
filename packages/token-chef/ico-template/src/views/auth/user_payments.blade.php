<ul class="payments">
    <li class="payment-header">
        <div class="payment">@lang('ico-template::home.payment_list_payment')</div>
        <div class="eth">@lang('ico-template::home.payment_list_eth')</div>
        <div class="bonus colored">@lang('ico-template::home.payment_list_bonus_tokens')</div>
        <div class="date">@lang('ico-template::home.payment_list_date')</div>
        <div class="tokens colored">@lang('ico-template::home.payment_list_tokens')</div>
    </li>
    @if (count($payments) >0)
        @foreach($payments as $payment)
            <li class="payment">
                <div class="payment">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_in_currency($payment)}}</div>
                <div class="eth">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_in_eth($payment)}}</div>
                <div class="tokens">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_bonus_tokens($payment)}}</div>
                <div class="date">{{$payment->created_at}}</div>
                <div class="tokens">{{\TokenChef\IcoTemplate\Services\AdditionalPaymentService::get_payment_in_tokens($payment)}}</div>
            </li>
        @endforeach
    @else
        <li class="no-transactions-wrapper">
            <div class="no-transactions">@lang('ico-template::home.no_transactions')</div>
        </li>
    @endif
</ul>