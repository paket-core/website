@lang('ico-template::custom_emails.invitation_hello',['NAME' => $receiver_name]):
@lang('ico-template::custom_emails.invitation_desc',[
                                'NAME' => $name,
                                'NORMAL_RATE' => \App\Services\ICOService::get_token_rate(),
                                'PROMO_RATE' => \App\Services\ICOService::get_promo_rate()
                                ])
@lang('ico-template::emails.invitation_button')
{{$link}}
@lang('ico-template::custom_emails.rights')
@lang('ico-template::custom_emails.unsubscribe')