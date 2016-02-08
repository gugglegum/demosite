<?php
/**
 * Список маршрутов
 *
 * Это своего рода таблица маршрутизации, которая задает соответствие между адресом и обработчиком запроса. Специальный
 * класс Router занимается тем, что перебирает данные маршруты, примеряя содержащиеся в них регулярные выражения к
 * запрошенному URL и останавливается когда нашёл. Если не нашёл, то управление получает обработчик, выводящий страницу
 * с ошибкой 404.
 */

return [
    // Главная страница
    'site/index' => [
        'pattern' => '#^/$#',
        'reverse' => '/',
    ],

    // Пиццы
    'pizza/index' => [
        'pattern' => '#^/pizza$#',
        'reverse' => '/pizza',
    ],
    'pizza/topic' => [
        'pattern' => '#^/pizza/(?<topic>\w+)$#',
        'reverse' => '/pizza/<topic>',
    ],
    'pizza/item' => [
        'pattern' => '#^/pizza/(?<topic>\w+)/(?<id>\d+)$#',
        'reverse' => '/pizza/<topic>/<id>',
    ],

    // Солнечная Система
    'solar-system/index' => [
        'pattern' => '#^/solar-system$#',
        'reverse' => '/solar-system'
    ],
    'solar-system/structure' => [
        'pattern' => '#^/solar-system/structure$#',
        'reverse' => '/solar-system/structure'
    ],
    'solar-system/terms' => [
        'pattern' => '#^/solar-system/terms$#',
        'reverse' => '/solar-system/terms'
    ],
    'solar-system/sun' => [
        'pattern' => '#^/solar-system/sun$#',
        'reverse' => '/solar-system/sun'
    ],

    // Млечный Путь
    'milky-way/index' => [
        'pattern' => '#^/milky-way$#',
        'reverse' => '/milky-way'
    ],
    'milky-way/history' => [
        'pattern' => '#^/milky-way/history$#',
        'reverse' => '/milky-way/history'
    ],
    'milky-way/position' => [
        'pattern' => '#^/milky-way/position$#',
        'reverse' => '/milky-way/position'
    ],
    'milky-way/evolution' => [
        'pattern' => '#^/milky-way/evolution$#',
        'reverse' => '/milky-way/evolution'
    ],
    'milky-way/panoramas' => [
        'pattern' => '#^/milky-way/panoramas$#',
        'reverse' => '/milky-way/panoramas'
    ],

    // Вселенная
    'universe/index' => [
        'pattern' => '#^/universe$#',
        'reverse' => '/universe'
    ],
    'universe/shape' => [
        'pattern' => '#^/universe/shape$#',
        'reverse' => '/universe/shape'
    ],
    'universe/observations' => [
        'pattern' => '#^/universe/observations$#',
        'reverse' => '/universe/observations'
    ],
    'universe/models' => [
        'pattern' => '#^/universe/models$#',
        'reverse' => '/universe/models'
    ],
];
