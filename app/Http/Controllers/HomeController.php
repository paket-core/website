<?php

namespace App\Http\Controllers;

use App\Services\TokenService;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home_page()
    {

        $members = [
            (object)[
                'name' => 'Oren Gampel',
                'role' => 'CEO',
                'image' => 'oren',
            ],
            (object)[
                'name' => 'Israel Levin',
                'role' => 'CTO',
                'image' => 'israel',
            ],
            (object)[
                'name' => 'Chen Barak',
                'role' => 'VP Business Development',
                'image' => 'chen',
            ]
        ];

        $endorsements = [
            (object)[
                'name' => 'Yariv Gilat',
                'role' => 'Developer'
            ],
            (object)[
                'name' => 'Sebastian Stupurac',
                'role' => 'Developer'
            ],
            (object)[
                'name' => 'Stas Oskin',
                'role' => 'Developer'
            ],
            (object)[
                'name' => 'Ofer Rotem',
                'role' => 'Developer'
            ],
            (object)[
                'name' => 'Guy Corem',
                'role' => 'Developer'
            ],
            (object)[
                'name' => 'Ido Sadeh',
                'role' => 'Developer'
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
        return view('developers.developers_page', [
            'road_maps' => TokenService::get_road_maps(),
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
