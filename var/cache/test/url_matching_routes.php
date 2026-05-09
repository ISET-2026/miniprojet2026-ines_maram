<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
        '/requests' => [[['_route' => 'admin_role_requests', '_controller' => 'App\\Controller\\adminRequestsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\loginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\loginController::logout'], null, null, null, false, false, null]],
        '/addRecette' => [[['_route' => 'addRecette', '_controller' => 'App\\Controller\\newRecetteController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:40)'
                            .'|\\.well\\-known/genid/([^/]++)(*:75)'
                            .'|validation_errors/([^/]++)(*:108)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:145)'
                        .'|/(?'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:188)'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:223)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:260)'
                            .')'
                            .'|recettes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:306)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:332)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:370)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/role\\-requests/(?'
                        .'|approve/([^/]++)(*:421)'
                        .'|reject/([^/]++)(*:444)'
                    .')'
                .')'
                .'|/favoris/(?'
                    .'|ajouter/([^/]++)(*:482)'
                    .'|supprimer/([^/]++)(*:508)'
                .')'
                .'|/recettes/(?'
                    .'|([^/]++)/ingredients/nouveau(*:558)'
                    .'|(\\d+)/supprimer(*:581)'
                    .'|([^/]++)(?'
                        .'|(*:600)'
                        .'|/(?'
                            .'|modifier(*:620)'
                            .'|supprimer(*:637)'
                        .')'
                    .')'
                    .'|(\\d+)/supprimer(*:662)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => null, '_api_respond' => true], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        75 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => true], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        108 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        145 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => null, '_api_respond' => true, 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        188 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => true], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        223 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        260 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        306 => [[['_route' => '_api_/recettes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        332 => [
            [['_route' => '_api_/recettes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/recettes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        370 => [
            [['_route' => '_api_/recettes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/recettes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Recette', '_api_operation_name' => '_api_/recettes/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        421 => [[['_route' => 'admin_role_request_approve', '_controller' => 'App\\Controller\\adminRequestsController::approve'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'admin_role_request_reject', '_controller' => 'App\\Controller\\adminRequestsController::reject'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'favoris_add', '_controller' => 'App\\Controller\\FavorisController::addFavorite'], ['id'], null, null, false, true, null]],
        508 => [[['_route' => 'favoris_remove', '_controller' => 'App\\Controller\\FavorisController::removeFavorite'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'app_ingredient_nouveau', '_controller' => 'App\\Controller\\IngredientController::nouveau'], ['recette_id'], null, null, false, false, null]],
        581 => [[['_route' => 'app_ingredient_supprimer', '_controller' => 'App\\Controller\\IngredientController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        600 => [[['_route' => 'app_recette_detail', '_controller' => 'App\\Controller\\RecettesController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'app_recettes_modifier', '_controller' => 'App\\Controller\\RecettesController::modifier'], ['id'], null, null, false, false, null]],
        637 => [[['_route' => 'app_recettes_supprimer', '_controller' => 'App\\Controller\\RecettesController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        662 => [
            [['_route' => 'app_tagrecettes_supprimer', '_controller' => 'App\\Controller\\TagRecettecontrollerController::supprimer'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
