<?php

namespace App\Http\Controllers;

use App\Services\TokenService;
use TokenChef\IcoTemplate\Services\LocaleService;
use TokenChef\IcoTemplate\Services\StaticArray;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function home_language($lang)
    {
        $lang = strtolower($lang);
        if (!in_array($lang, StaticArray::SUPPORTED_LANGUAGES)) {
            return \Redirect::to('/');
        }
        LocaleService::save_language($lang, true);
        return $this->render_home();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        \App::setLocale('en');
        return $this->render_home();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render_home()
    {

        $members = [
            (object)[
                'name' => 'Oren Gampel',
                'role' => 'CEO',
                'image' => 'oren_new',
                'linkedin' => 'https://www.linkedin.com/in/orengampel/',
                'github' => null
            ],
            (object)[
                'name' => 'Israel Levin',
                'role' => 'CTO',
                'image' => 'israel_new',
                'linkedin' => null,
                'github' => 'https://github.com/israellevin'
            ],
            (object)[
                'name' => 'Chen Barak',
                'role' => 'VP Business Development',
                'image' => 'chen_new',
                'linkedin' => 'https://www.linkedin.com/in/chen-barak-8547964/',
                'github' => null
            ],
            (object)[
                'name' => 'Yura Sherman',
                'role' => 'Community Manager',
                'image' => 'yura_new',
                'linkedin' => 'https://www.linkedin.com/in/yurra/',
                'github' => null
            ]
        ];

        $endorsements = [
            (object)[
                'name' => 'Yariv Gilat',
                'role' => 'Chairman at Simplex.com'
            ],
            (object)[
                'name' => 'Sebastian Stupurac',
                'role' => 'Co-Founder at Wings.ai'
            ],
            (object)[
                'name' => 'Stas Oskin',
                'role' => 'Co-Founder at Wings.ai'
            ],
            (object)[
                'name' => 'Ofer Rotem',
                'role' => 'Investor'
            ],
            (object)[
                'name' => 'Guy Corem',
                'role' => 'President of DAGlabs'
            ],
            (object)[
                'name' => 'Ido Sadeh',
                'role' => 'Founder of Saga Foundation'
            ]
        ];

        $partners = [
            (object)[
                'image' => 'deloitte.png',
            ]
        ];

        $companies = [
            [
                'link' => '',
                'image' => 'inc_black_new.png'
            ]
        ];

        $graph_items = [
            'professional_courier', 'opportunistic_courier', 'setellite', 'opportunistic_hub', 'professional_hub_operator', 'sender'
        ];


        return view('home.home_page', [
            'companies' => $companies,
            'endorsements' => $endorsements,
            'members' => $members,
            'road_maps' => TokenService::get_road_maps(),
            'partners' => $partners,
            'graph_items' => $graph_items
        ]);
    }

    public function token_page()
    {
        return view('tokens.tokens_page', [
            'road_maps' => TokenService::get_road_maps(),
        ]);
    }

    public function developers()
    {
        $list = (object)[
            (object)[
                'id' => '1',
                'value' => 'quick-start',
            ],
            (object)[
                'id' => '2',
                'value' => 'api',
            ],
            (object)[
                'id' => '3',
                'value' => 'architecture',
            ],
            (object)[
                'id' => '4',
                'value' => 'source-code',
            ],
            (object)[
                'id' => '5',
                'value' => 'community',
            ]
        ];
        return view('developers.developers_page', [
            'road_maps' => TokenService::get_road_maps(),
            'list' => $list
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Il`luminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function join()
    {
        return view('auth.join');
    }
}
