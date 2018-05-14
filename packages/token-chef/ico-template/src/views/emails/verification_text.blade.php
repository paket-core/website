@lang('ico-template::emails.thanks_for_joining',[
      'COMPANY' => \TokenChef\IcoTemplate\Services\ICOSettingsService::get_company_name()
  ])
@lang('ico-template::emails.click_confirmation_link'):
@lang('ico-template::emails.verify_button')
{{$link}}
@lang('ico-template::emails.link_not_clickable')
{{$link}}
@lang('ico-template::emails.link_not_clickable_2')
@lang('ico-template::emails.regards')
@lang('ico-template::emails.regards_team',[
      'TEAM' => \TokenChef\IcoTemplate\Services\ICOSettingsService::get_team_name()
  ])