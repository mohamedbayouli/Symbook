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
        '/user/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/user/cart/commander' => [[['_route' => 'cart_commander', '_controller' => 'App\\Controller\\CartController::commander'], null, null, null, false, false, null]],
        '/user/categories' => [[['_route' => 'user_categories', '_controller' => 'App\\Controller\\CategoriesController::userindex'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, false, false, null]],
        '/admin/categories/create' => [[['_route' => 'admin_categories_create', '_controller' => 'App\\Controller\\CategoriesController::create'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'app_commandes', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/user/commandes' => [[['_route' => 'user_commandes', '_controller' => 'App\\Controller\\CommandeController::userindex'], null, null, null, false, false, null]],
        '/admin/livres' => [[['_route' => 'app_livre_all', '_controller' => 'App\\Controller\\LivreController::all'], null, null, null, false, false, null]],
        '/livres' => [[['_route' => 'user_livre_all', '_controller' => 'App\\Controller\\LivreController::userall'], null, null, null, false, false, null]],
        '/admin/livre' => [[['_route' => 'app_livre_create', '_controller' => 'App\\Controller\\LivreController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/api/sales' => [[['_route' => 'api_sales', '_controller' => 'App\\Controller\\SalesController::salesData'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'sales_dashboard', '_controller' => 'App\\Controller\\SalesController::dashboard'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/user/(?'
                    .'|c(?'
                        .'|art/(?'
                            .'|add/([^/]++)(*:234)'
                            .'|update/([^/]++)(*:257)'
                            .'|remove/([^/]++)(*:280)'
                        .')'
                        .'|ommande/([^/]++)(*:305)'
                    .')'
                    .'|livre/show/([^/]++)(*:333)'
                    .'|([^/]++)(*:349)'
                    .'|commande/([^/]++)(*:374)'
                    .'|([^/]++)(?'
                        .'|/edit(*:398)'
                        .'|(*:406)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategories/edit/([^/]++)(*:453)'
                        .'|ommande/([^/]++)(*:477)'
                    .')'
                    .'|livre/(?'
                        .'|delete/([^/]++)(*:510)'
                        .'|show/([^/]++)(*:531)'
                    .')'
                .')'
                .'|/paiement/(?'
                    .'|([^/]++)(*:562)'
                    .'|s(?'
                        .'|tripe/([^/]++)(*:588)'
                        .'|uccess/([^/]++)(*:611)'
                    .')'
                    .'|cancel/([^/]++)(*:635)'
                .')'
                .'|/verify\\-payment/([^/]++)(*:669)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:713)'
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
        234 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'user_commande_show', '_controller' => 'App\\Controller\\CommandeController::usershow'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'user_livre_show', '_controller' => 'App\\Controller\\LivreController::usershow'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'app_dommande_detail', '_controller' => 'App\\Controller\\UserController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        453 => [[['_route' => 'admin_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], null, null, false, true, null]],
        477 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'app_livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'app_paiement', '_controller' => 'App\\Controller\\PaymentController::index'], ['id'], null, null, false, true, null]],
        588 => [[['_route' => 'app_paiement_stripe', '_controller' => 'App\\Controller\\PaymentController::stripePayment'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'app_paiement_success', '_controller' => 'App\\Controller\\PaymentController::success'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'app_paiement_cancel', '_controller' => 'App\\Controller\\PaymentController::cancel'], ['id'], null, null, false, true, null]],
        669 => [[['_route' => 'app_verify_payment', '_controller' => 'App\\Controller\\PaymentController::verifyPayment'], ['token'], null, null, false, true, null]],
        713 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
