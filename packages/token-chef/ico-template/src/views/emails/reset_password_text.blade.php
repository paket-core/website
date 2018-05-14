@lang('ico-template::emails.forgotten_title'):
@lang('ico-template::emails.hello', [
    'NAME' =>  $name
])
@lang('ico-template::emails.forgotten_change_desc'):
@lang('ico-template::emails.forgotten_button') {{$link}}
@lang('ico-template::emails.link_not_clickable')
{{$link}}
@lang('ico-template::emails.link_not_clickable_2')
@lang('ico-template::emails.forgotten_change_ignore'):
@lang('ico-template::emails.regards')
@lang('ico-template::emails.regards_team',[
      'TEAM' => \TokenChef\IcoTemplate\Services\ICOSettingsService::get_team_name()
  ])