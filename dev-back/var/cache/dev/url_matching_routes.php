<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_tacos_accueil', '_controller' => 'App\\Controller\\TacosController::accueil'], null, null, null, false, false, null]],
        '/click&collect' => [[['_route' => 'click&collect', '_controller' => 'App\\Controller\\TacosController::renderProduits'], null, null, null, false, false, null]],
        '/goto/credits' => [[['_route' => 'app_tacos_goto', '_controller' => 'App\\Controller\\TacosController::goto'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|options(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:191)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:217)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:255)'
                            .')'
                        .')'
                        .'|produits(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:302)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:328)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:366)'
                            .')'
                            .'|_categories(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:415)'
                                .'|(?:\\.([^/]++))?(*:438)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:478)'
                .'|/([^/]++)(*:495)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        191 => [[['_route' => '_api_/options/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        217 => [
            [['_route' => '_api_/options{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/options{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        255 => [
            [['_route' => '_api_/options/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/options/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/options/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Options', '_api_operation_name' => '_api_/options/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        302 => [[['_route' => '_api_/produits/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        328 => [
            [['_route' => '_api_/produits{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/produits{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        366 => [
            [['_route' => '_api_/produits/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produits', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        415 => [[['_route' => '_api_/produits_categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ProduitsCategorie', '_api_operation_name' => '_api_/produits_categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => '_api_/produits_categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ProduitsCategorie', '_api_operation_name' => '_api_/produits_categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        495 => [
            [['_route' => 'page_categorie', '_controller' => 'App\\Controller\\TacosController::renderTacos'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
