<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::Categories'], [], [['text', '/accueil']], [], [], []],
    'souscategorie' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::Souscategories'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/souscategorie']], [], [], []],
    'listeproduits' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::Listeproduits'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/listeproduits']], [], [], []],
    'details' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::Details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details']], [], [], []],
    'profil_client' => [[], ['_controller' => 'App\\Controller\\AccueilController::ProfilClient'], [], [['text', '/profil']], [], [], []],
    'recap_profil' => [[], ['_controller' => 'App\\Controller\\AccueilController::ProfilRecapClient'], [], [['text', '/recap_profil']], [], [], []],
    'admin_accueil' => [[], ['_controller' => 'App\\Controller\\AdminAccueilController::accueil'], [], [['text', '/admin/accueil']], [], [], []],
    'api_ProduitsListe' => [[], ['_controller' => 'App\\Controller\\Api\\ApiController::ProduitsListe'], [], [['text', '/api/produits']], [], [], []],
    'api_produit' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::Produit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/produits']], [], [], []],
    'api_sousCategorieListe' => [[], ['_controller' => 'App\\Controller\\Api\\ApiController::SousCategorieListe'], [], [['text', '/api/souscategorie']], [], [], []],
    'api_souscategorie' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::sousCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/souscategorie']], [], [], []],
    'api_InsertProduit' => [[], ['_controller' => 'App\\Controller\\Api\\ApiController::InsertProduit'], [], [['text', '/api/produits']], [], [], []],
    'api_InsertSousCategorie' => [[], ['_controller' => 'App\\Controller\\Api\\ApiController::InsertSousCategorie'], [], [['text', '/api/souscategorie']], [], [], []],
    'api_UpdateSousCategorie' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::UpdateSousCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/souscategorie']], [], [], []],
    'api_UpdateProduit' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::UpdateProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/produits']], [], [], []],
    'api_DeleteProduit' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::DeleteProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/produits']], [], [], []],
    'api_DeleteSousCategorie' => [['id'], ['_controller' => 'App\\Controller\\Api\\ApiController::DeleteSousCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/souscategorie']], [], [], []],
    'api_UploadFile' => [['table', 'id'], ['_controller' => 'App\\Controller\\Api\\ApiController::UploadFile'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'table', true], ['text', '/api/files']], [], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\ContenirController::index'], [], [['text', '/panier']], [], [], []],
    'panier_add' => [['id'], ['_controller' => 'App\\Controller\\ContenirController::panier_add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/add']], [], [], []],
    'panier_delete' => [['id'], ['_controller' => 'App\\Controller\\ContenirController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier_delete']], [], [], []],
    'panier_update' => [['id'], ['_controller' => 'App\\Controller\\ContenirController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier_update']], [], [], []],
    'panier_valider' => [[], ['_controller' => 'App\\Controller\\ContenirController::ValidationCommande'], [], [['text', '/panier_valider']], [], [], []],
    'informations_client' => [[], ['_controller' => 'App\\Controller\\ContenirController::infos_client'], [], [['text', '/informations/client']], [], [], []],
    'facturePdf' => [['commande'], ['_controller' => 'App\\Controller\\FactureController::facturePdf'], [], [['variable', '/', '[^/]++', 'commande', true], ['text', '/facture/pdf']], [], [], []],
    'facture' => [['commande'], ['_controller' => 'App\\Controller\\FactureController::facture'], [], [['variable', '/', '[^/]++', 'commande', true], ['text', '/facture/vu']], [], [], []],
    'produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], [], []],
    'post_client' => [[], ['_controller' => 'App\\Controller\\UserController::AjoutClient'], [], [['text', '/profil/post']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
