<section class="home-section home-project developers-desc" id="product">
    <div class="container">
        <div class="project-items-wrapper col-md-10 col-md-offset-1">
            <div class="project-item row" id="quick-start">
                <div class="col-md-6 col-md-push-6">
                    <h1 class="title">@lang('developers.section_title_1')</h1>
                    <p class="desc">@lang('developers.section_desc_1',[
                        'LINK' =>  '<a href="https://www.stellar.org/" target="_blank">'.trans('developers.section_desc_1_link').'</a>',
                        'LINK_2' =>  '<a href="https://github.com/paket-core/paket-stellar/blob/master/README.md" target="_blank">'.trans('developers.section_desc_1_link_2').'</a>'
                    ])</p>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <img src="/images/developers/developers_4_s.png"
                         alt="@lang('developers.section_title_1')"
                         srcset="/images/developers/developers_4_b.png 2x, /images/developers/developers_4.png 3x">
                </div>
                <div class="col-md-12 center-section">
                    <div class="title-wrapper">
                        <h2 class="subtitle">@lang('developers.section_desc_1_h_1')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_1_p_1',[
                    'LINK' =>  '<a href="https://github.com/paket-core/api/" target="_blank">'.trans('developers.section_desc_1_p_1_link').'</a>',
                    ])</p>
                    <ul class="dotted-list">
                        <li><span class="dot"></span><span>@lang('developers.section_desc_1_p_1_li_1',[
                            'LINK' =>  '<a href="https://www.stellar.org/laboratory/#account-creator" target="_blank">'.trans('developers.section_desc_1_p_1_li_1_link').'</a>',
                        ])</span></li>
                        <li><span class="dot"></span><span>@lang('developers.section_desc_1_p_1_li_2',[
                            'LINK' =>  '<a href="https://ed25519.cr.yp.to/" target="_blank">'.trans('developers.section_desc_1_p_1_li_2_link').'</a>',
                            'LINK_2' =>  '<a href="https://github.com/StellarCN/py-stellar-base" target="_blank">'.trans('developers.section_desc_1_p_1_li_2_link_2').'</a>'
                        ])</span></li>
                        <li><span class="dot"></span><span>@lang('developers.section_desc_1_p_1_li_3')</span></li>
                    </ul>
                    <p class="desc">@lang('developers.section_desc_1_p_2',[
                    'LINK' =>  '<a href="http://api.paket.global/" target="_blank">'.trans('developers.section_desc_1_p_2_link').'</a>',
                    ])</p>
                </div>
            </div>
            <div class="project-item row" id="architecture">
                <div class="col-md-6">
                    <h1 class="title">@lang('developers.section_title_3')</h1>
                    <p class="desc">@lang('developers.section_desc_3_top_desc')</p>
                </div>
                <div class="col-md-6 center">
                    <img src="/images/developers/developers_03_s.png"
                         alt="@lang('developers.section_title_3')"
                         srcset="/images/developers/developers_03_b.png 2x, /images/developers/developers_03.png 3x">
                </div>
                <div class="col-md-12 center-section">
                    <div class="title-wrapper" id="api">
                        <h2 class="subtitle">@lang('developers.section_desc_3_h_1')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_3_p_1')</p>
                    <div class="title-wrapper">
                        <h2 class="subtitle">@lang('developers.section_desc_3_h_2')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_3_p_2_1')</p>
                    <p class="desc">@lang('developers.section_desc_3_p_2_2')</p>
                    <p class="desc">@lang('developers.section_desc_3_p_2_3')</p>
                    <p class="desc">@lang('developers.section_desc_3_p_2_4')</p>
                    <div class="title-wrapper">
                        <h2 class="subtitle">@lang('developers.section_desc_3_h_3')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_3_p_3_1')</p>
                    <p class="desc">@lang('developers.section_desc_3_p_3_2')</p>
                    <div class="title-wrapper">
                        <h2 class="subtitle">@lang('developers.section_desc_3_h_4')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_3_p_4')</p>
                    <ul class="dotted-list">
                        <li><span class="dot"></span><span>@lang('developers.section_desc_3_p_4_li_1')</span></li>
                        <li><span class="dot"></span><span>@lang('developers.section_desc_3_p_4_li_2')</span></li>
                    </ul>
                    <div class="title-wrapper">
                        <h2 class="subtitle">@lang('developers.section_desc_3_h_5')</h2>
                    </div>
                    <p class="desc">@lang('developers.section_desc_3_p_5')</p>
                </div>
            </div>
            <div class="project-item row source-code" id="source-code">
                <div class="col-md-6 col-md-push-6">
                    <h1 class="title">@lang('developers.section_title_4')</h1>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/paket-stellar">{{trans('developers.section_desc_4_p_1_link')}}</a>
                        - {{trans('developers.section_desc_4_p_1_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/bridge">{{trans('developers.section_desc_4_p_2_link')}}</a>
                        - {{trans('developers.section_desc_4_p_2_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/router">{{trans('developers.section_desc_4_p_3_link')}}</a>
                        - {{trans('developers.section_desc_4_p_3_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/funder">{{trans('developers.section_desc_4_p_4_link')}}</a>
                        - {{trans('developers.section_desc_4_p_4_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/manager">{{trans('developers.section_desc_4_p_5_link')}}</a>
                        - {{trans('developers.section_desc_4_p_5_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/mobile">{{trans('developers.section_desc_4_p_6_link')}}</a>
                        - {{trans('developers.section_desc_4_p_6_desc')}}
                    </p>
                    <p class="desc">
                        <a target="_blank" rel="noreferrer noopener"
                           href="https://github.com/paket-core/py-stellar-base">{{trans('developers.section_desc_4_p_7_link')}}</a>
                        - {{trans('developers.section_desc_4_p_7_desc')}}
                    </p>

                </div>
                <div class="col-md-6 col-md-pull-6">
                    <img src="/images/developers/developers_1_s.png"
                         alt="@lang('developers.section_title_4')"
                         srcset="/images/developers/developers_1_b.png 2x, /images/developers/developers_1.png 3x">
                </div>
                <div class="col-md-12 center">
                    <img src="/images/developers/developers_1_architecture.jpeg"
                         class="architecture"
                         alt="@lang('developers.section_title_4')"
                         srcset="/images/developers/developers_1_architecture_s.jpeg 480w, /images/developers/developers_1_architecture.jpeg 800w, /images/developers/developers_1_architecture_b.jpeg 2x">
                </div>
            </div>
            <div class="project-item row" id="community">
                <div class="col-md-6">
                    <h1 class="title">@lang('developers.section_title_2')</h1>
                    <p class="desc"><a href="{{\TokenChef\IcoTemplate\Services\StaticArray::TELEGRAM_URL}}"
                                       target="_blank">@lang('developers.section_desc_2_p_1')</a></p>
                    <p class="desc"><a href="https://www.github.com/paket-core"
                                       target="_blank">@lang('developers.section_desc_2_p_2')</a></p>
                    <p class="desc"><a href="https://galactictalk.org"
                                       target="_blank">@lang('developers.section_desc_2_p_3')</a></p>
                </div>
                <div class="col-md-6">
                    <img src="/images/developers/developers_2_s.png"
                         alt="@lang('developers.section_title_2')"
                         srcset="/images/developers/developers_2_b.png 2x, /images/developers/developers_2.png 3x">
                </div>
                <div class="col-md-12 center">
                    <a href="https://github.com/paket-core/mobile/projects/1" target="_blank" rel="noreferrer noopener">
                        <img src="/images/developers/developers_1_architecture.jpeg"
                             class="architecture"
                             alt="@lang('developers.section_title_4')"
                             srcset="/images/developers/developers_2_board_s.jpeg 480w, /images/developers/developers_2_board.jpeg 800w, /images/developers/developers_2_board_b.jpeg 2x">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>