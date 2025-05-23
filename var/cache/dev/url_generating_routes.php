<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/user/cart']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/add']], [], [], []],
    'cart_commander' => [[], ['_controller' => 'App\\Controller\\CartController::commander'], [], [['text', '/user/cart/commander']], [], [], []],
    'cart_update' => [['id'], ['_controller' => 'App\\Controller\\CartController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/update']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/remove']], [], [], []],
    'user_categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::userindex'], [], [['text', '/user/categories']], [], [], []],
    'admin_categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/admin/categories']], [], [], []],
    'admin_categories_create' => [[], ['_controller' => 'App\\Controller\\CategoriesController::create'], [], [['text', '/admin/categories/create']], [], [], []],
    'admin_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories/edit']], [], [], []],
    'app_commandes' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/admin/commandes']], [], [], []],
    'app_commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commande']], [], [], []],
    'user_commandes' => [[], ['_controller' => 'App\\Controller\\CommandeController::userindex'], [], [['text', '/user/commandes']], [], [], []],
    'user_commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::usershow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/commande']], [], [], []],
    'app_livre_delete' => [['id'], ['_controller' => 'App\\Controller\\LivreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/livre/delete']], [], [], []],
    'app_livre_all' => [[], ['_controller' => 'App\\Controller\\LivreController::all'], [], [['text', '/admin/livres']], [], [], []],
    'user_livre_all' => [[], ['_controller' => 'App\\Controller\\LivreController::userall'], [], [['text', '/livres']], [], [], []],
    'app_livre_show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/livre/show']], [], [], []],
    'user_livre_show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::usershow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/livre/show']], [], [], []],
    'app_livre_create' => [[], ['_controller' => 'App\\Controller\\LivreController::create'], [], [['text', '/admin/livre']], [], [], []],
    'app_paiement' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement']], [], [], []],
    'app_paiement_stripe' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::stripePayment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/stripe']], [], [], []],
    'app_paiement_success' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::success'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/success']], [], [], []],
    'app_paiement_cancel' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::cancel'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/cancel']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'api_sales' => [[], ['_controller' => 'App\\Controller\\SalesController::salesData'], [], [['text', '/api/sales']], [], [], []],
    'sales_dashboard' => [[], ['_controller' => 'App\\Controller\\SalesController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_dommande_detail' => [['id'], ['_controller' => 'App\\Controller\\UserController::show2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/commande']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/user/cart']], [], [], []],
    'App\Controller\CartController::add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/add']], [], [], []],
    'App\Controller\CartController::commander' => [[], ['_controller' => 'App\\Controller\\CartController::commander'], [], [['text', '/user/cart/commander']], [], [], []],
    'App\Controller\CartController::update' => [['id'], ['_controller' => 'App\\Controller\\CartController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/update']], [], [], []],
    'App\Controller\CartController::remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/cart/remove']], [], [], []],
    'App\Controller\CategoriesController::userindex' => [[], ['_controller' => 'App\\Controller\\CategoriesController::userindex'], [], [['text', '/user/categories']], [], [], []],
    'App\Controller\CategoriesController::index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/admin/categories']], [], [], []],
    'App\Controller\CategoriesController::create' => [[], ['_controller' => 'App\\Controller\\CategoriesController::create'], [], [['text', '/admin/categories/create']], [], [], []],
    'App\Controller\CategoriesController::edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories/edit']], [], [], []],
    'App\Controller\CommandeController::index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/admin/commandes']], [], [], []],
    'App\Controller\CommandeController::show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commande']], [], [], []],
    'App\Controller\CommandeController::userindex' => [[], ['_controller' => 'App\\Controller\\CommandeController::userindex'], [], [['text', '/user/commandes']], [], [], []],
    'App\Controller\CommandeController::usershow' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::usershow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/commande']], [], [], []],
    'App\Controller\LivreController::delete' => [['id'], ['_controller' => 'App\\Controller\\LivreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/livre/delete']], [], [], []],
    'App\Controller\LivreController::all' => [[], ['_controller' => 'App\\Controller\\LivreController::all'], [], [['text', '/admin/livres']], [], [], []],
    'App\Controller\LivreController::userall' => [[], ['_controller' => 'App\\Controller\\LivreController::userall'], [], [['text', '/livres']], [], [], []],
    'App\Controller\LivreController::show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/livre/show']], [], [], []],
    'App\Controller\LivreController::usershow' => [['id'], ['_controller' => 'App\\Controller\\LivreController::usershow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/livre/show']], [], [], []],
    'App\Controller\LivreController::create' => [[], ['_controller' => 'App\\Controller\\LivreController::create'], [], [['text', '/admin/livre']], [], [], []],
    'App\Controller\PaymentController::index' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement']], [], [], []],
    'App\Controller\PaymentController::stripePayment' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::stripePayment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/stripe']], [], [], []],
    'App\Controller\PaymentController::success' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::success'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/success']], [], [], []],
    'App\Controller\PaymentController::cancel' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::cancel'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paiement/cancel']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\SalesController::salesData' => [[], ['_controller' => 'App\\Controller\\SalesController::salesData'], [], [['text', '/api/sales']], [], [], []],
    'App\Controller\SalesController::dashboard' => [[], ['_controller' => 'App\\Controller\\SalesController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::show2' => [['id'], ['_controller' => 'App\\Controller\\UserController::show2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/commande']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
