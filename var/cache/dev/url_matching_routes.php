<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actividad' => [[['_route' => 'app_actividad_index', '_controller' => 'App\\Controller\\ActividadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actividad/new' => [[['_route' => 'app_actividad_new', '_controller' => 'App\\Controller\\ActividadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/carga' => [[['_route' => 'app_carga_index', '_controller' => 'App\\Controller\\CargaController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/pago' => [[['_route' => 'app_pago_index', '_controller' => 'App\\Controller\\PagoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pago/new' => [[['_route' => 'app_pago_new', '_controller' => 'App\\Controller\\PagoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/persona' => [[['_route' => 'app_persona_index', '_controller' => 'App\\Controller\\PersonaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/persona/new' => [[['_route' => 'app_persona_new', '_controller' => 'App\\Controller\\PersonaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/actividad/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/p(?'
                    .'|ago/([^/]++)(?'
                        .'|(*:241)'
                        .'|/edit(*:254)'
                        .'|(*:262)'
                    .')'
                    .'|ersona/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|change_state/([^/]++)(*:350)'
                    .'|edit/([^/]++)(*:371)'
                    .'|([^/]++)(*:387)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_actividad_show', '_controller' => 'App\\Controller\\ActividadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_actividad_edit', '_controller' => 'App\\Controller\\ActividadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'app_actividad_delete', '_controller' => 'App\\Controller\\ActividadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_pago_show', '_controller' => 'App\\Controller\\PagoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_pago_edit', '_controller' => 'App\\Controller\\PagoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'app_pago_delete', '_controller' => 'App\\Controller\\PagoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_persona_show', '_controller' => 'App\\Controller\\PersonaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_persona_edit', '_controller' => 'App\\Controller\\PersonaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_persona_delete', '_controller' => 'App\\Controller\\PersonaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'change_user_state', '_controller' => 'App\\Controller\\UserController::changeState'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        371 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        387 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
