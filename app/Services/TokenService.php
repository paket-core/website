<?php

namespace App\Services;

class TokenService
{

    public static function get_road_maps()
    {
        $road_maps = [
            (object)[
                'title' => trans('roadmap.roadmap_title_1'),
                'date' => trans('roadmap.roadmap_date_1'),
                'desc' => trans('roadmap.roadmap_desc_1'),
                'finished' => true
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_2'),
                'date' => trans('roadmap.roadmap_date_2'),
                'desc' => trans('roadmap.roadmap_desc_2'),
                'finished' => false
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_3'),
                'date' => trans('roadmap.roadmap_date_3'),
                'desc' => trans('roadmap.roadmap_desc_3'),
                'finished' => false
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_4'),
                'date' => trans('roadmap.roadmap_date_4'),
                'desc' => trans('roadmap.roadmap_desc_4'),
                'finished' => false
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_5'),
                'date' => trans('roadmap.roadmap_date_5'),
                'desc' => trans('roadmap.roadmap_desc_5'),
                'finished' => false
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_6'),
                'date' => trans('roadmap.roadmap_date_6'),
                'desc' => trans('roadmap.roadmap_desc_6'),
                'finished' => false
            ],
            (object)[
                'title' => trans('roadmap.roadmap_title_7'),
                'date' => trans('roadmap.roadmap_date_7'),
                'desc' => trans('roadmap.roadmap_desc_7'),
                'finished' => false
            ]
        ];

        return $road_maps;
    }


}