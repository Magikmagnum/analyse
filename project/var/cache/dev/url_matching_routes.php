<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/analyse' => [[['_route' => 'croquette_analyse', '_controller' => 'App\\Controller\\AnalyseController::analyseAll'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/brand' => [[['_route' => 'marque_list', '_controller' => 'App\\Controller\\BrandController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/croquette' => [[['_route' => 'croquette_list', '_controller' => 'App\\Controller\\CroquetteController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/register' => [[['_route' => 'security_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/reset' => [[['_route' => 'security_reset', '_controller' => 'App\\Controller\\SecurityController::reset'], null, ['PUT' => 0], null, false, false, null]],
        '/api/v1/delete' => [[['_route' => 'security_delete', '_controller' => 'App\\Controller\\SecurityController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/v1/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/v1/(?'
                    .'|analyse/([^/]++)(*:69)'
                    .'|croquette(?'
                        .'|/([^/]++)(*:97)'
                        .'|_by_brand/([^/]++)(*:122)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'croquette_analyseOne', '_controller' => 'App\\Controller\\AnalyseController::analyseOne'], ['id'], ['POST' => 0], null, false, true, null]],
        97 => [[['_route' => 'croquette_show', '_controller' => 'App\\Controller\\CroquetteController::showOne'], ['id'], ['GET' => 0], null, false, true, null]],
        122 => [
            [['_route' => 'marque_show', '_controller' => 'App\\Controller\\CroquetteController::showByBrand'], ['brand'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
