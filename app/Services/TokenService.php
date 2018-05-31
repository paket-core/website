<?php

namespace App\Services;

class TokenService
{

    public static function get_road_maps()
    {
        $road_maps = [
            (object)[
                'title' => 'Private sale',
                'date' => 'Q1-2018',
                'desc' => 'Development of base protocol - a trusted transfer of valuables between couriers and hubs',
            ],
            (object)[
                'title' => 'Token generation<br/>Public sale Market Making:',
                'date' => 'Q2-2018',
                'desc' => 'Open source application(s) - enabling end user usage of the base protocol',
            ],
            (object)[
                'title' => 'Facilitate worldwide creation of local hubs Creation of an example hub:',
                'date' => 'Q3-2018',
                'desc' => 'Global and local overview supply/demand',
            ],
            (object)[
                'title' => 'Sign an international courier for global deliveries between hubs',
                'date' => 'Q4-2018',
                'desc' => 'Layer 2 routing system Robust hub management application',
            ],
            (object)[
                'title' => 'Facilitate an economic solution within a country',
                'date' => 'Q1-2019',
                'desc' => '',
            ],
            (object)[
                'title' => 'Facilitate an economic solution in a single continent',
                'date' => 'Q2-2019',
                'desc' => 'Switch entirely to a decentralized identity authority',
            ],
            (object)[
                'title' => 'Facilitate an economic solution in across continents',
                'date' => 'Q3-2019',
                'desc' => 'Decentralized routing - removing dependency on a central routing service.',
            ]
        ];

        return $road_maps;
    }


}