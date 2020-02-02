<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/jsonRespons/index' => [[['_route' => 'use_json_respons', '_controller' => 'App\\Controller\\UseJsonResponsController::index'], null, null, null, false, false, null]],
        '/json_respons' => [[['_route' => 'jsonRespons', '_controller' => 'App\\Controller\\UseJsonResponsController::jsonRespons'], null, null, null, false, false, null]],
        '/useservice/index' => [[['_route' => 'use_service_index', '_controller' => 'App\\Controller\\UseServiceController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/site_respons/([^/]++)(*:29)'
                .'|/useservice(?'
                    .'|/([^/]++)(*:59)'
                    .'|Ex/([^/]++)(*:77)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'site_respons', '_controller' => 'App\\Controller\\UseJsonResponsController::siteRespons'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'useservice', '_controller' => 'App\\Controller\\UseServiceController::useService'], ['username'], null, null, false, true, null]],
        77 => [
            [['_route' => 'useserviceEx', '_controller' => 'App\\Controller\\UseServiceController::useServiceEx'], ['username'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
