
@extends('ico-template::emails.app')

@section('email_content')
    <table width="100%" border="0" cellspacing="0" cellpadding="20"
           style="border: solid #EEEEEE 1px; border-top: solid #181818 3px;">
        <tr>
            <td align="center"><a href="#" target="_blank" style="text-decoration:none;"><img
                            src="{{env('APP_URL')}}/images/email/simple.png" width="560" height="276"
                            style="display:block;font-family: Arial, sans-serif; font-size:15px; line-height:18px; color:#30373b;  font-weight:bold;"
                            border="0" alt="{{env('APP_COMPANY_NAME')}}"/></a></td>
        </tr>
        <tr>
            <td align="center"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:22px; line-height:32px; color:#2190F5;font-weight: 800">
                {{$title}}
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:32px; color:#000; padding: 0 20px;">
                {{$desc}}
            </td>
        </tr>
        <tr>
            <td align="center">
                <a href="{{$link}}">
                    <button style="background-color: #0a2053; color: #fff; outline: none; border: none; padding: 10px 20px;">
                        @lang('ico-template::emails.email_event_go_to_dashboard')
                    </button>
                </a>
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:32px; color:#000; padding: 0 20px;">
                @lang('ico-template::emails.email_link_not_clickable')
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:32px; color:#000; padding: 0 20px;">
                {{$link}}
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:32px; color:#000; padding: 0 20px;">
                @lang('ico-template::emails.email_link_not_clickable_2')
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:22px; color:#000; padding: 20px 0 0 20px;">
                @lang('ico-template::emails.regards'),
            </td>
        </tr>
        <tr>
            <td align="left"
                style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; line-height:22px; color:#000; padding: 10px 20px;">
            @lang('ico-template::emails.regards_team',[
                'TEAM' => \TokenChef\IcoTemplate\Services\ICOSettingsService::get_team_name()
            ])
        </tr>
        <tr>
            <td height="14" class="em_height" style="padding: 10px;">&nbsp;</td>
        </tr>
    </table>
@endsection