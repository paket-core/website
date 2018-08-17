<?php

namespace App\Http\Controllers;

use App\Services\TokenService;
use TokenChef\IcoTemplate\Services\LocaleService;
use TokenChef\IcoTemplate\Services\StaticArray;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends RestController
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
                'linkedin' => 'https://www.linkedin.com/in/israel-levin-406a28168/',
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
                'link' => 'https://markets.businessinsider.com/news/stocks/paket-to-launch-a-decentralized-deliveries-platform-1027439214',
                'image' => 'markets_insider.png',
                'quote' => 'The PAKET platform will allow anyone from anywhere in the world to ship items quickly and optimally using the trustless nature afforded by the blockchain and smart contract technologies.',
                'company' => 'MarketsInsider',
            ],
            [
                'link' => 'https://finance.yahoo.com/news/paket-launch-decentralized-deliveries-platform-153000290.html?guccounter=1',
                'image' => 'yahoo_finance.png',
                'quote' => 'PAKET is building a decentralized delivery platform powered by the Stellar platform to bring a significant improvement to the logistics industry.',
                'company' => 'Yahoo! Finance'
            ],
            [
                'link' => 'https://bitscreener.com/news/solving-the-last-mile-how-blockchain-is-changing-the-face-of-delivery',
                'image' => 'bit_screener.png',
                'quote' => 'PAKET has developed a fully decentralized network to connect the standard delivery methods, connecting them through an efficient, highly communicative ecosystem.',
                'company' => 'BitScreener'
            ],
            [
                'link' => 'https://www.cryptoninjas.net/2018/08/01/how-the-last-mile-problem-is-being-solved-by-blockchain/',
                'image' => 'crypto_ninjas.png',
                'quote' => 'PAKET enables delivery providers to communicate better by giving them a standardized place to do so',
                'company' => 'CryptoNinjas'
            ],
            [
                'link' => 'https://bitcoingarden.org/take-the-power-back-why-the-global-delivery-market-needs-to-shaken-up/',
                'image' => 'bitcoin_garden.png',
                'quote' => 'PAKET is an open-source platform that offers the opportunity for developers to get involved in shaping the ecosystem.',
                'company' => 'BitcoinGarden'
            ],
            [
                'link' => 'https://bitsonline.com/paket-decentralizing-global-deliveries/',
                'image' => 'bitsonline.png',
                'quote' => 'Paket is developing a trustless, secure, and global network for parcel deliveries using its native BUL token.',
                'company' => 'Bitsonline'
            ],
            [
                'link' => 'https://www.techworm.net/2018/08/company-disrupt-the-2-trillion-parcel-delivery-industry.html',
                'image' => 'tech_worm.png',
                'quote' => 'Paket is launching the world’s first decentralized parcel delivery network.<br/>It will bring connectivity to a fragmented market.',
                'company' => 'TechWorm'
            ],
            [
                'link' => 'https://www.zerohedge.com/news/2018-08-14/supply-chains-are-finally-getting-update-blockchain-innovation',
                'image' => 'zero_hedge.png',
                'quote' => 'PAKET proposes using blockchain to establish a package delivery ecosystem that will allow supply chain coordination of international transportation giants, delivery companies and last mile casual couriers.',
                'company' => 'ZeroHedge'
            ],
            [
                'link' => 'https://hackernoon.com/decentralization-will-create-a-better-sharing-economy-1e84e0c36301',
                'image' => 'hackernoon.png',
                'quote' => 'Such a decentralized model doesn’t just open up the market. It creates a more cost-effective solution for the entire shipping industry to the benefit of consumers.',
                'company' => 'HackerNoon'
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

    /**
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function map_language($lang)
    {
        $this->set_language($lang, '/map');
        return $this->render_map();
    }

    public function map()
    {
        $this->set_language('en', '/map');
        return $this->render_map();
    }

    protected function render_map()
    {
        return view('map.map_page', [
            'redirect_language' => '/{LANG}/map'
        ]);
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
}
