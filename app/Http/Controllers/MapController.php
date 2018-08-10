<?php

namespace App\Http\Controllers;

use App\Services\MapService;
use TokenChef\IcoTemplate\Exceptions\WebException;

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
        try {
            return $this->json_success(null, MapService::get_map_data());
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }


    protected function render_map()
    {
        return view('map.map_page', [
            'redirect_language' => '/{LANG}/map'
        ]);
    }
}
