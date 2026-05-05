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
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories', '_controller' => 'App\\Controller\\CategorieRecettecontrollerController::index'], null, null, null, false, false, null]],
        '/nouvelle' => [[['_route' => 'app_categorie_nouvelle', '_controller' => 'App\\Controller\\CategorieRecettecontrollerController::nouvelle'], null, null, null, false, false, null]],
        '/editR' => [[['_route' => 'editR', '_controller' => 'App\\Controller\\EditRecetteController::index'], null, null, null, true, false, null]],
        '/favoris' => [[['_route' => 'favoris_index', '_controller' => 'App\\Controller\\FavorisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient' => [[['_route' => 'app_ingredient', '_controller' => 'App\\Controller\\IngredientController::index'], null, null, null, false, false, null]],
        '/recettes' => [[['_route' => 'app_recettes', '_controller' => 'App\\Controller\\RecettesController::index'], null, null, null, false, false, null]],
        '/recettes/nouvelle' => [[['_route' => 'app_recettes_nouvelle', '_controller' => 'App\\Controller\\RecettesController::nouvelle'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/tagrecette' => [[['_route' => 'app_tag_recette', '_controller' => 'App\\Controller\\TagRecettecontrollerController::index'], null, null, null, false, false, null]],
        '/tagrecette/nouvelle' => [[['_route' => 'app_tagrecettes_nouvelle', '_controller' => 'App\\Controller\\TagRecettecontrollerController::nouvelle'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\loginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\loginController::logout'], null, null, null, false, false, null]],
        '/addRecette' => [[['_route' => 'addRecette', '_controller' => 'App\\Controller\\newRecetteController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:37)'
                        .'|\\.well\\-known/genid/([^/]++)(*:72)'
                        .'|validation_errors/([^/]++)(*:105)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:142)'
                    .'|/(?'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:257)'
                        .')'
                        .'|recettes(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:303)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:329)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:367)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:410)'
                    .'|wdt/([^/]++)(*:430)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:472)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:509)'
                                .'|router(*:523)'
                                .'|exception(?'
                                    .'|(*:543)'
                                    .'|\\.css(*:556)'
                                .')'
                            .')'
                            .'|(*:566)'
                        .')'
                    .')'
                .')'
                .'|/favoris/(?'
                    .'|ajouter/([^/]++)(*:605)'
                    .'|supprimer/([^/]++)(*:631)'
                .')'
                .'|/recettes/(?'
                    .'|([^/]++)/ingredients/nouveau(*:681)'
                    .'|(\\d+)(*:694)'
                    .'|(\\d+)/modifier(*:716)'
                    .'|(\\d+)/supprimer(?'
                        .'|(*:742)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => null, '_api_respond' => true], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        72 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => true], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        105 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => null, '_api_respond' => true, 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => true], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        303 => [[['_route' => '_api_/recettes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        329 => [
            [['_route' => '_api_/recettes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/recettes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        367 => [
            [['_route' => '_api_/recettes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/recettes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        410 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        430 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        472 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        509 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        523 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        543 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        556 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        566 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        605 => [[['_route' => 'favoris_add', '_controller' => 'App\\Controller\\FavorisController::addFavorite'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'favoris_remove', '_controller' => 'App\\Controller\\FavorisController::removeFavorite'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'app_ingredient_nouveau', '_controller' => 'App\\Controller\\IngredientController::nouveau'], ['recette_id'], null, null, false, false, null]],
        694 => [[['_route' => 'app_recette_detail', '_controller' => 'App\\Controller\\RecettesController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        716 => [[['_route' => 'app_recettes_modifier', '_controller' => 'App\\Controller\\RecettesController::modifier'], ['id'], null, null, false, false, null]],
        742 => [
            [['_route' => 'app_recettes_supprimer', '_controller' => 'App\\Controller\\RecettesController::supprimer'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_tagrecettes_supprimer', '_controller' => 'App\\Controller\\TagRecettecontrollerController::supprimer'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
