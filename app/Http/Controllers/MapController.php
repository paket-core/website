<?php

namespace App\Http\Controllers;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class MapController extends RestController
{
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

    public function map_markers()
    {
        return $this->json_success(null, [
            'users' => [
                "51.508, -0.31",
                "51.708, -0.35",
                "51.308, -0.32",
                "51.108, -0.38",
            ],
            'packages' => [
                "51.508, -0.01",
                "51.708, -0.05",
                "51.308, -0.02",
                "51.108, -0.108",
            ],
            'paths' => [
                [
                    "51.108, -0.58",
                    "51.508, -0.71",
                    "51.708, -0.55",
                ]
            ]
        ]);
    }


    protected function render_map()
    {
        return view('map.map_page', [
            'redirect_language' => '/{LANG}/map'
        ]);
    }
}
