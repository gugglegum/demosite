<?php

namespace app\helpers;

use app\Router;

class Url
{
    /**
     * Генерирует URL на страницу, заданную при помощи массива с именем маршрута в нулевом ключе и возможными
     * дополнительными параметрами в других ключах
     *
     * @param array $route
     * @return string
     * @throws \app\Exception
     */
    public static function to(array $route)
    {
        $routeName = $route[0];
        unset($route[0]);

        $reverse = Router::getInstance()->getRouteReverse($routeName);

        $search = array_keys($route);
        array_walk($search, function(&$value) {
            $value = "<{$value}>";
        });
        $replace = array_values($route);
        return str_replace($search, $replace, $reverse);
    }
}
