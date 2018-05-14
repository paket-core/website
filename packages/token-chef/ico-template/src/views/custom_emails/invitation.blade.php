@extends('ico-template::custom_emails.app')

@section('email_content')
    <td valign="top" id="templateHeader">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
            <tbody class="mcnTextBlockOuter">
            <tr>
                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                    <!--[if mso]>
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                        <tr>
                    <![endif]-->

                    <!--[if mso]>
                    <td valign="top" width="600" style="width:600px;">
                    <![endif]-->
                    <table align="left" border="0" cellpadding="0" cellspacing="0"
                           style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                        <tbody>
                        <tr>

                            <td valign="top" class="mcnTextContent"
                                style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                <h1>@lang('ico-template::custom_emails.invitation_hello',['NAME' => $receiver_name])</h1>

                                <p>@lang('ico-template::custom_emails.invitation_desc',[
                                'NAME' => $name,
                                'NORMAL_RATE' => \App\Services\ICOService::get_token_rate(),
                                'PROMO_RATE' => \App\Services\ICOService::get_promo_rate()
                                ])</p>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--[if mso]>
                    </td>
                    <![endif]-->

                    <!--[if mso]>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
            <tbody class="mcnButtonBlockOuter">
            <tr>
                <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top"
                    align="center" class="mcnButtonBlockInner">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer"
                           style="border-collapse: separate !important;border: 1px none #E221C2;border-radius: 10px;background-color: #11984E;">
                        <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent"
                                style="font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; padding: 15px;">
                                <a class="mcnButton " title="@lang('ico-template::custom_emails.invitation_button')" href="{{$link}}"
                                   target="_blank"
                                   style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">@lang('ico-template::custom_emails.invitation_button')</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
@endsection