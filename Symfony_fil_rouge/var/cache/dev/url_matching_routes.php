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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::Categories'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil_client', '_controller' => 'App\\Controller\\AccueilController::ProfilClient'], null, null, null, false, false, null]],
        '/recap_profil' => [[['_route' => 'recap_profil', '_controller' => 'App\\Controller\\AccueilController::ProfilRecapClient'], null, null, null, false, false, null]],
        '/admin/accueil' => [[['_route' => 'admin_accueil', '_controller' => 'App\\Controller\\AdminAccueilController::accueil'], null, null, null, false, false, null]],
        '/api/produits' => [
            [['_route' => 'api_ProduitsListe', '_controller' => 'App\\Controller\\Api\\ApiController::ProduitsListe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_InsertProduit', '_controller' => 'App\\Controller\\Api\\ApiController::InsertProduit'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/souscategorie' => [
            [['_route' => 'api_sousCategorieListe', '_controller' => 'App\\Controller\\Api\\ApiController::SousCategorieListe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_InsertSousCategorie', '_controller' => 'App\\Controller\\Api\\ApiController::InsertSousCategorie'], null, ['POST' => 0], null, false, false, null],
        ],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\ContenirController::index'], null, null, null, false, false, null]],
        '/panier_valider' => [[['_route' => 'panier_valider', '_controller' => 'App\\Controller\\ContenirController::ValidationCommande'], null, null, null, false, false, null]],
        '/informations/client' => [[['_route' => 'informations_client', '_controller' => 'App\\Controller\\ContenirController::infos_client'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/profil/post' => [[['_route' => 'post_client', '_controller' => 'App\\Controller\\UserController::AjoutClient'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/souscategorie/([^/]++)(*:191)'
                .'|/listeproduits/([^/]++)(*:222)'
                .'|/details/([^/]++)(*:247)'
                .'|/api/(?'
                    .'|produits/([^/]++)(?'
                        .'|(*:283)'
                    .')'
                    .'|souscategorie/([^/]++)(?'
                        .'|(*:317)'
                    .')'
                    .'|files/([^/]++)/([^/]++)(*:349)'
                .')'
                .'|/p(?'
                    .'|anier(?'
                        .'|/add/([^/]++)(*:384)'
                        .'|_(?'
                            .'|delete/([^/]++)(*:411)'
                            .'|update/([^/]++)(*:434)'
                        .')'
                    .')'
                    .'|roduit/([^/]++)(?'
                        .'|(*:462)'
                        .'|/edit(*:475)'
                        .'|(*:483)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|pdf/([^/]++)(*:517)'
                    .'|vu/([^/]++)(*:536)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'souscategorie', '_controller' => 'App\\Controller\\AccueilController::Souscategories'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'listeproduits', '_controller' => 'App\\Controller\\AccueilController::Listeproduits'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'details', '_controller' => 'App\\Controller\\AccueilController::Details'], ['id'], null, null, false, true, null]],
        283 => [
            [['_route' => 'api_produit', '_controller' => 'App\\Controller\\Api\\ApiController::Produit'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_UpdateProduit', '_controller' => 'App\\Controller\\Api\\ApiController::UpdateProduit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_DeleteProduit', '_controller' => 'App\\Controller\\Api\\ApiController::DeleteProduit'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        317 => [
            [['_route' => 'api_souscategorie', '_controller' => 'App\\Controller\\Api\\ApiController::sousCategorie'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_UpdateSousCategorie', '_controller' => 'App\\Controller\\Api\\ApiController::UpdateSousCategorie'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_DeleteSousCategorie', '_controller' => 'App\\Controller\\Api\\ApiController::DeleteSousCategorie'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        349 => [[['_route' => 'api_UploadFile', '_controller' => 'App\\Controller\\Api\\ApiController::UploadFile'], ['table', 'id'], ['POST' => 0], null, false, true, null]],
        384 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\ContenirController::panier_add'], ['id'], ['POST' => 0], null, false, true, null]],
        411 => [[['_route' => 'panier_delete', '_controller' => 'App\\Controller\\ContenirController::delete'], ['id'], null, null, false, true, null]],
        434 => [[['_route' => 'panier_update', '_controller' => 'App\\Controller\\ContenirController::update'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        517 => [[['_route' => 'facturePdf', '_controller' => 'App\\Controller\\FactureController::facturePdf'], ['commande'], null, null, false, true, null]],
        536 => [
            [['_route' => 'facture', '_controller' => 'App\\Controller\\FactureController::facture'], ['commande'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
