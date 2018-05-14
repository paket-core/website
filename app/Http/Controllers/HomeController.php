<?php

namespace App\Http\Controllers;

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
        if (!in_array($lang, StaticArray::SUPPORTED_LANGUAGES) && $lang !== 'en') {
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
    public function token_sale()
    {

        $milestones = [];

        $companies = [
            (object)[
                'link' => '/',
                'img' => 'the_next_web_logo.png'
            ]
        ];

        for ($a = 1; $a <= 6; $a++) {
            $milestones[] = (object)[
                'title' => trans('tokens.milestone_title_' . $a),
                'desc' => trans('tokens.milestone_desc_' . $a),
            ];
        }

        $members = [
            (object)[
                'name' => 'ori',
                'linkedin' => 'leviori',
            ],
            (object)[
                'name' => 'frank',
                'linkedin' => 'frank-bonnet-3b890865',
            ],
            (object)[
                'name' => 'jamie',
                'linkedin' => 'jamienewsroom',
            ],
            (object)[
                'name' => 'shaul',
                'linkedin' => 'shaul-shvimmer-62b444127',
            ],
            (object)[
                'name' => 'pasha',
                'linkedin' => 'pavel-shwartz-a2536218',
            ],
            (object)[
                'name' => 'yura',
                'linkedin' => null,
            ],
            (object)[
                'name' => 'konrad',
                'linkedin' => 'konrad-seweryn-21b762a2',
            ],
            (object)[
                'name' => 'roi',
                'linkedin' => null,
            ]
        ];

        return view('token_sale.token_sale_page', [
            'milestones' => $milestones,
            'companies' => $companies,
            'members' => $members
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function render_home()
    {

        //for publications
        $companies = [
            (object)[
                'link' => '/',
                'img' => 'the_next_web_logo.png'
            ]
        ];

        $members = [
            (object)[
                'name' => 'sebastian',
            ],
            (object)[
                'name' => 'younes',
            ],
            (object)[
                'name' => 'andrei',
            ],
            (object)[
                'name' => 'janis',
            ],
            (object)[
                'name' => 'frank',
            ],
            (object)[
                'name' => 'ori',
            ],
            (object)[
                'name' => 'mike',
            ]
        ];

        return view('home.home_landing', [
            'companies' => $companies,
            'members' => $members
        ]);
    }
}
