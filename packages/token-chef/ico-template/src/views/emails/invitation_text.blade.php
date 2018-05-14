@lang('ico-template::emails.invitation_title',['NAME' => $name]):
@lang('ico-template::emails.hello', [
    'NAME' =>  $receiver_name
])
@lang('ico-template::emails.email_invitation_desc',['NAME' =>  $name])
@lang('ico-template::emails.email_link_not_clickable')
{{$link}}
@lang('ico-template::emails.email_link_not_clickable_2')
@lang('ico-template::emails.regards')
@lang('ico-template::emails.regards_team',[
      'TEAM' => \TokenChef\IcoTemplate\Services\ICOSettingsService::get_team_name()
  ])