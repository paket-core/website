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
        $this->set_language($lang, '/');
        return $this->render_home();
    }

    /**
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function home_language_redirect($lang)
    {
        return \Redirect::to('/' . $lang);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $this->set_language('en', '/');
        return $this->render_home();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render_home()
    {

        $members = [
            (object)[
                'image' => 'oren',
                'linkedin' => 'https://www.linkedin.com/in/orengampel/',
                'github' => null
            ],
            (object)[
                'image' => 'israel',
                'linkedin' => null,
                'github' => 'https://github.com/israellevin'
            ],
            (object)[
                'image' => 'chen',
                'linkedin' => 'https://www.linkedin.com/in/chen-barak-8547964/',
                'github' => null
            ],
            (object)[
                'image' => 'yura',
                'linkedin' => 'https://www.linkedin.com/in/yurra/',
                'github' => null
            ],
            (object)[
                'image' => 'ori',
                'linkedin' => 'https://www.linkedin.com/in/leviori/',
                'github' => null
            ],
            (object)[
                'image' => 'carmit',
                'linkedin' => 'https://www.linkedin.com/in/carmitglik/',
                'github' => null,
            ],
            (object)[
                'image' => 'ayelet',
                'linkedin' => 'https://www.linkedin.com/in/ayeletturtel/',
                'github' => null,
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

    /**
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function token_page_language($lang)
    {
        $this->set_language($lang, '/token-sale');
        return $this->render_token_sale();
    }

    public function token_page()
    {
        $this->set_language('en', '/token-sale');
        return $this->render_token_sale();
    }

    protected function render_token_sale()
    {
        return view('tokens.tokens_page', [
            'road_maps' => TokenService::get_road_maps(),
            'redirect_language' => '/{LANG}/token-sale'
        ]);
    }

    /**
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function developers_language($lang)
    {
        $this->set_language($lang, '/developers');
        return $this->render_developers();
    }

    public function developers()
    {
        $this->set_language('en', '/developers');
        return $this->render_developers();
    }

    protected function render_developers()
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
            'list' => $list,
            'redirect_language' => '/{LANG}/token-sale'
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

    protected function set_language($lang, $url = '/')
    {
        $lang = strtolower($lang);
        if (!in_array($lang, StaticArray::SUPPORTED_LANGUAGES)) {
            return \Redirect::to($url);
        }
        LocaleService::save_language($lang, true);
        return $lang;
    }
}
