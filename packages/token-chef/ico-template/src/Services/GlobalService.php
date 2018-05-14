<?php

namespace TokenChef\IcoTemplate\Services;

class GlobalService
{

    /**
     * @return string
     */
    public static function round($number, $round = 2, $sep = ',')
    {
        return number_format((float)$number, $round, '.', $sep);
    }


    public static function secure_string($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    public static function get_boolean_value($value)
    {
        return $value === 'true' || $value === true || $value === 'yes';
    }

}