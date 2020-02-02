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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/site_respons/([^/]++)(*:64)'
                .'|/useservice(?'
                    .'|/([^/]++)(*:94)'
                    .'|Ex/([^/]++)(*:112)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'site_respons', '_controller' => 'App\\Controller\\UseJsonResponsController::siteRespons'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'useservice', '_controller' => 'App\\Controller\\UseServiceController::useService'], ['username'], null, null, false, true, null]],
        112 => [
            [['_route' => 'useserviceEx', '_controller' => 'App\\Controller\\UseServiceController::useServiceEx'], ['username'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
