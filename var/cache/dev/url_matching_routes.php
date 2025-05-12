<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/commander' => [[['_route' => 'cart_commander', '_controller' => 'App\\Controller\\CartController::commander'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, false, false, null]],
        '/admin/categories/create' => [[['_route' => 'admin_categories_create', '_controller' => 'App\\Controller\\CategoriesController::create'], null, null, null, false, false, null]],
        '/admin/categories/edit' => [[['_route' => 'admin_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'app_commandes', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/gamme' => [[['_route' => 'app_gamme', '_controller' => 'App\\Controller\\GammeController::index'], null, null, null, false, false, null]],
        '/admin/livres' => [[['_route' => 'app_livre_all', '_controller' => 'App\\Controller\\LivreController::all'], null, null, null, false, false, null]],
        '/admin/livre/show2' => [[['_route' => 'app_livre_show2', '_controller' => 'App\\Controller\\LivreController::show2'], null, null, null, false, false, null]],
        '/admin/livre/show3' => [[['_route' => 'app_livre_show3', '_controller' => 'App\\Controller\\LivreController::show3'], null, null, null, false, false, null]],
        '/admin/livre' => [[['_route' => 'app_livre_create', '_controller' => 'App\\Controller\\LivreController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|rticle/([^/]++)(*:222)'
                    .'|dmin/(?'
                        .'|commande/([^/]++)(*:255)'
                        .'|livre/(?'
                            .'|delete/([^/]++)(*:287)'
                            .'|show/([^/]++)(*:308)'
                        .')'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:340)'
                    .'|update/([^/]++)(*:363)'
                    .'|remove/([^/]++)(*:386)'
                .')'
                .'|/test/([^/]++)(*:409)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::lister'], ['nom'], null, null, false, true, null]],
        255 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'app_livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        363 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        386 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        409 => [
            [['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::test'], ['age'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
