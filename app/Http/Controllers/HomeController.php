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
    public function render_home()
    {

        $members = [
            (object)[
                'name' => 'Oren Gampel',
                'role' => 'CEO',
                'image' => 'oren_new',
                'linkedin' => 'https://www.linkedin.com/in/orengampel/'
            ],
            (object)[
                'name' => 'Israel Levin',
                'role' => 'CTO',
                'image' => 'israel_new',
                'linkedin' => 'https://github.com/israellevin'
            ],
            (object)[
                'name' => 'Chen Barak',
                'role' => 'VP Business Development',
                'image' => 'chen_new',
                'linkedin' => 'https://www.linkedin.com/in/chen-barak-8547964/'
            ],
            (object)[
                'name' => 'Yura Sherman',
                'role' => 'Community Manager',
                'image' => 'yura_new',
                'linkedin' => 'https://www.linkedin.com/in/yurra/'
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
            ],
            (object)[
                'image' => 'gkh.png',
            ],
            (object)[
                'image' => 'rampart.png',
            ],
            (object)[
                'image' => 'turicum.png',
            ],
        ];

        $companies = [
            [
                'link' => '',
                'image' => 'inc_black_new.png'
            ],
            [
                'link' => '',
                'image' => 'coin_telegraph_new.png'
            ],
            [
                'link' => '',
                'image' => 'investopedia_new.png'
            ],
            [
                'link' => '',
                'image' => 'vb.png'
            ],
            [
                'link' => '',
                'image' => 'cso.png'
            ],
            [
                'link' => '',
                'image' => 'cryptoinsider_new.png'
            ],
            [
                'link' => '',
                'image' => 'forbes.png'
            ],
            [
                'link' => '',
                'image' => 'tnw.png'
            ],
            [
                'link' => '',
                'image' => 'investing_com.png'
            ],
            [
                'link' => '',
                'image' => 'cio_new.png',
            ],
            [
                'link' => '',
                'image' => 'pc_mag.png'
            ],
            [
                'link' => '',
                'image' => 'cryptocompare.png'
            ],
            [
                'link' => '',
                'image' => 'tech_worm.png'
            ],
            [
                'link' => '',
                'image' => 'livebitcoinnews.png'
            ],
            [
                'link' => '',
                'image' => 'finance_magnates.png'
            ],
            [
                'link' => '',
                'image' => 'steemit_new.png'
            ],
            [
                'link' => '',
                'image' => 'core_media.png'
            ],
            [
                'link' => '',
                'image' => 'bitnewsbot.png',
            ],
            [
                'link' => '',
                'image' => 'hackernoon.png',
            ],
            [
                'link' => '',
                'image' => 'coin_speaker.png',
            ],
            [
                'link' => '',
                'image' => 'coin_spot.png',
            ],
            [
                'link' => '',
                'image' => 'token_tops.png',
            ],
            [
                'link' => '',
                'image' => 'fork_log.png'
            ],
            [
                'link' => '',
                'image' => 'cryptovest.png',
            ],
            [
                'link' => '',
                'image' => 'bitcoinist.png',
            ],
            [
                'link' => '',
                'image' => 'zero_hedge.png',
            ],
            [
                'link' => '',
                'image' => 'itsblockchain.png',
            ],
            [
                'link' => '',
                'image' => 'coin_schedule.png',
            ],
            [
                'link' => '',
                'image' => 'townhall_finance.png',
            ],
            [
                'link' => '',
                'image' => 'coin_joker.png',
            ],
            [
                'link' => '',
                'image' => 'data_conomy.png',
            ],
            [
                'link' => '',
                'image' => 'the_bitcoin_news.png',
            ],
            [
                'link' => '',
                'image' => 'coin_idol.png'
            ],
            [
                'link' => '',
                'image' => 'coin_fox.png'
            ],
            [
                'link' => '',
                'image' => 'eco_27.png'
            ],
            [
                'link' => '',
                'image' => 'bt_manager.png',
            ],
            [
                'link' => '',
                'image' => 'technology_org.png'
            ],
            [
                'link' => '',
                'image' => 'hacked.png'
            ],
            [
                'link' => '',
                'image' => 'tech_in_asia.png'
            ],
            [
                'link' => '',
                'image' => 'brave_new_coin.png'
            ],
            [
                'link' => '',
                'image' => 'chipin.png'
            ],
            [
                'link' => '',
                'image' => 'bitcoiner_today.png'
            ],
            [
                'link' => '',
                'image' => 'security_now.png'
            ],
            [
                'link' => '',
                'image' => 'crypto_potato.png',
            ],
            [
                'link' => '',
                'image' => 'bit_coin_new_asia.png',
            ],
            [
                'link' => '',
                'image' => 'hacker_news.png'
            ],
            [
                'link' => '',
                'image' => 'blockchain_news.png'
            ],
            [
                'link' => '',
                'image' => 'best_vpn.png'
            ],
            [
                'link' => '',
                'image' => 'news_btc_new.png'
            ],
            [
                'link' => '',
                'image' => 'info_security.png'
            ],
            [
                'link' => '',
                'image' => 'digitalj.png'
            ],
            [
                'link' => '',
                'image' => 'yahoo_finance.png'
            ],
            [
                'link' => '',
                'image' => 'thestreet.png'
            ],
            [
                'link' => '',
                'image' => 'cryptonews.png',
            ],
        ];

        return view('home.home_page', [
            'companies' => $companies,
            'endorsements' => $endorsements,
            'members' => $members,
            'road_maps' => TokenService::get_road_maps(),
            'partners' => $partners
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
                'value' => 'community',
            ],
            (object)[
                'id' => '5',
                'value' => 'source-code',
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
