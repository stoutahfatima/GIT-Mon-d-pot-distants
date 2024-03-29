<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9GuEwAmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9GuEwAm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9GuEwAm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilController::Categories' => ['privates', '.service_locator.atZjRC7', 'get_ServiceLocator_AtZjRC7Service', true],
            'App\\Controller\\AccueilController::Details' => ['privates', '.service_locator.Awiw3jm', 'get_ServiceLocator_Awiw3jmService', true],
            'App\\Controller\\AccueilController::Listeproduits' => ['privates', '.service_locator.9TuYU95', 'get_ServiceLocator_9TuYU95Service', true],
            'App\\Controller\\AccueilController::ProfilClient' => ['privates', '.service_locator.xGMcrZE', 'get_ServiceLocator_XGMcrZEService', true],
            'App\\Controller\\AccueilController::ProfilRecapClient' => ['privates', '.service_locator.xGMcrZE', 'get_ServiceLocator_XGMcrZEService', true],
            'App\\Controller\\AccueilController::Souscategories' => ['privates', '.service_locator.QwgC8Kq', 'get_ServiceLocator_QwgC8KqService', true],
            'App\\Controller\\AdminAccueilController::accueil' => ['privates', '.service_locator.FHnzvqN', 'get_ServiceLocator_FHnzvqNService', true],
            'App\\Controller\\Api\\ApiController::DeleteProduit' => ['privates', '.service_locator.S4p9cTF', 'get_ServiceLocator_S4p9cTFService', true],
            'App\\Controller\\Api\\ApiController::DeleteSousCategorie' => ['privates', '.service_locator.sV0i3XO', 'get_ServiceLocator_SV0i3XOService', true],
            'App\\Controller\\Api\\ApiController::InsertProduit' => ['privates', '.service_locator.PNAcsUb', 'get_ServiceLocator_PNAcsUbService', true],
            'App\\Controller\\Api\\ApiController::InsertSousCategorie' => ['privates', '.service_locator.Oihj14o', 'get_ServiceLocator_Oihj14oService', true],
            'App\\Controller\\Api\\ApiController::Produit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\Api\\ApiController::ProduitsListe' => ['privates', '.service_locator.x8tpI.t', 'get_ServiceLocator_X8tpI_TService', true],
            'App\\Controller\\Api\\ApiController::SousCategorieListe' => ['privates', '.service_locator.STp7EaC', 'get_ServiceLocator_STp7EaCService', true],
            'App\\Controller\\Api\\ApiController::UpdateProduit' => ['privates', '.service_locator.j6.hcLR', 'get_ServiceLocator_J6_HcLRService', true],
            'App\\Controller\\Api\\ApiController::UpdateSousCategorie' => ['privates', '.service_locator.bGahbSz', 'get_ServiceLocator_BGahbSzService', true],
            'App\\Controller\\Api\\ApiController::UploadFile' => ['privates', '.service_locator.aESbRfb', 'get_ServiceLocator_AESbRfbService', true],
            'App\\Controller\\Api\\ApiController::sousCategorie' => ['privates', '.service_locator.TU6gKrj', 'get_ServiceLocator_TU6gKrjService', true],
            'App\\Controller\\ContenirController::ValidationCommande' => ['privates', '.service_locator.YPSa3rD', 'get_ServiceLocator_YPSa3rDService', true],
            'App\\Controller\\ContenirController::index' => ['privates', '.service_locator.OWCoeqK', 'get_ServiceLocator_OWCoeqKService', true],
            'App\\Controller\\ContenirController::infos_client' => ['privates', '.service_locator.FTIYgTV', 'get_ServiceLocator_FTIYgTVService', true],
            'App\\Controller\\ContenirController::panier_add' => ['privates', '.service_locator.Awiw3jm', 'get_ServiceLocator_Awiw3jmService', true],
            'App\\Controller\\FactureController::facture' => ['privates', '.service_locator.xlJ1lgu', 'get_ServiceLocator_XlJ1lguService', true],
            'App\\Controller\\FactureController::facturePdf' => ['privates', '.service_locator.hnwsMzP', 'get_ServiceLocator_HnwsMzPService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.y7kcte8', 'get_ServiceLocator_Y7kcte8Service', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.lK7hLDT', 'get_ServiceLocator_LK7hLDTService', true],
            'App\\Controller\\ProduitController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator..lAy1RC', 'get_ServiceLocator__LAy1RCService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wVA_BXi', 'get_ServiceLocator_WVABXiService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::AjoutClient' => ['privates', '.service_locator.kHm6Xpq', 'get_ServiceLocator_KHm6XpqService', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.PwU4h9H', 'get_ServiceLocator_PwU4h9HService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AccueilController:Categories' => ['privates', '.service_locator.atZjRC7', 'get_ServiceLocator_AtZjRC7Service', true],
            'App\\Controller\\AccueilController:Details' => ['privates', '.service_locator.Awiw3jm', 'get_ServiceLocator_Awiw3jmService', true],
            'App\\Controller\\AccueilController:Listeproduits' => ['privates', '.service_locator.9TuYU95', 'get_ServiceLocator_9TuYU95Service', true],
            'App\\Controller\\AccueilController:ProfilClient' => ['privates', '.service_locator.xGMcrZE', 'get_ServiceLocator_XGMcrZEService', true],
            'App\\Controller\\AccueilController:ProfilRecapClient' => ['privates', '.service_locator.xGMcrZE', 'get_ServiceLocator_XGMcrZEService', true],
            'App\\Controller\\AccueilController:Souscategories' => ['privates', '.service_locator.QwgC8Kq', 'get_ServiceLocator_QwgC8KqService', true],
            'App\\Controller\\AdminAccueilController:accueil' => ['privates', '.service_locator.FHnzvqN', 'get_ServiceLocator_FHnzvqNService', true],
            'App\\Controller\\Api\\ApiController:DeleteProduit' => ['privates', '.service_locator.S4p9cTF', 'get_ServiceLocator_S4p9cTFService', true],
            'App\\Controller\\Api\\ApiController:DeleteSousCategorie' => ['privates', '.service_locator.sV0i3XO', 'get_ServiceLocator_SV0i3XOService', true],
            'App\\Controller\\Api\\ApiController:InsertProduit' => ['privates', '.service_locator.PNAcsUb', 'get_ServiceLocator_PNAcsUbService', true],
            'App\\Controller\\Api\\ApiController:InsertSousCategorie' => ['privates', '.service_locator.Oihj14o', 'get_ServiceLocator_Oihj14oService', true],
            'App\\Controller\\Api\\ApiController:Produit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\Api\\ApiController:ProduitsListe' => ['privates', '.service_locator.x8tpI.t', 'get_ServiceLocator_X8tpI_TService', true],
            'App\\Controller\\Api\\ApiController:SousCategorieListe' => ['privates', '.service_locator.STp7EaC', 'get_ServiceLocator_STp7EaCService', true],
            'App\\Controller\\Api\\ApiController:UpdateProduit' => ['privates', '.service_locator.j6.hcLR', 'get_ServiceLocator_J6_HcLRService', true],
            'App\\Controller\\Api\\ApiController:UpdateSousCategorie' => ['privates', '.service_locator.bGahbSz', 'get_ServiceLocator_BGahbSzService', true],
            'App\\Controller\\Api\\ApiController:UploadFile' => ['privates', '.service_locator.aESbRfb', 'get_ServiceLocator_AESbRfbService', true],
            'App\\Controller\\Api\\ApiController:sousCategorie' => ['privates', '.service_locator.TU6gKrj', 'get_ServiceLocator_TU6gKrjService', true],
            'App\\Controller\\ContenirController:ValidationCommande' => ['privates', '.service_locator.YPSa3rD', 'get_ServiceLocator_YPSa3rDService', true],
            'App\\Controller\\ContenirController:index' => ['privates', '.service_locator.OWCoeqK', 'get_ServiceLocator_OWCoeqKService', true],
            'App\\Controller\\ContenirController:infos_client' => ['privates', '.service_locator.FTIYgTV', 'get_ServiceLocator_FTIYgTVService', true],
            'App\\Controller\\ContenirController:panier_add' => ['privates', '.service_locator.Awiw3jm', 'get_ServiceLocator_Awiw3jmService', true],
            'App\\Controller\\FactureController:facture' => ['privates', '.service_locator.xlJ1lgu', 'get_ServiceLocator_XlJ1lguService', true],
            'App\\Controller\\FactureController:facturePdf' => ['privates', '.service_locator.hnwsMzP', 'get_ServiceLocator_HnwsMzPService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.y7kcte8', 'get_ServiceLocator_Y7kcte8Service', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.lK7hLDT', 'get_ServiceLocator_LK7hLDTService', true],
            'App\\Controller\\ProduitController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator..lAy1RC', 'get_ServiceLocator__LAy1RCService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wVA_BXi', 'get_ServiceLocator_WVABXiService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:AjoutClient' => ['privates', '.service_locator.kHm6Xpq', 'get_ServiceLocator_KHm6XpqService', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.PwU4h9H', 'get_ServiceLocator_PwU4h9HService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AccueilController::Categories' => '?',
            'App\\Controller\\AccueilController::Details' => '?',
            'App\\Controller\\AccueilController::Listeproduits' => '?',
            'App\\Controller\\AccueilController::ProfilClient' => '?',
            'App\\Controller\\AccueilController::ProfilRecapClient' => '?',
            'App\\Controller\\AccueilController::Souscategories' => '?',
            'App\\Controller\\AdminAccueilController::accueil' => '?',
            'App\\Controller\\Api\\ApiController::DeleteProduit' => '?',
            'App\\Controller\\Api\\ApiController::DeleteSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController::InsertProduit' => '?',
            'App\\Controller\\Api\\ApiController::InsertSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController::Produit' => '?',
            'App\\Controller\\Api\\ApiController::ProduitsListe' => '?',
            'App\\Controller\\Api\\ApiController::SousCategorieListe' => '?',
            'App\\Controller\\Api\\ApiController::UpdateProduit' => '?',
            'App\\Controller\\Api\\ApiController::UpdateSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController::UploadFile' => '?',
            'App\\Controller\\Api\\ApiController::sousCategorie' => '?',
            'App\\Controller\\ContenirController::ValidationCommande' => '?',
            'App\\Controller\\ContenirController::index' => '?',
            'App\\Controller\\ContenirController::infos_client' => '?',
            'App\\Controller\\ContenirController::panier_add' => '?',
            'App\\Controller\\FactureController::facture' => '?',
            'App\\Controller\\FactureController::facturePdf' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::new' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\UserController::AjoutClient' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AccueilController:Categories' => '?',
            'App\\Controller\\AccueilController:Details' => '?',
            'App\\Controller\\AccueilController:Listeproduits' => '?',
            'App\\Controller\\AccueilController:ProfilClient' => '?',
            'App\\Controller\\AccueilController:ProfilRecapClient' => '?',
            'App\\Controller\\AccueilController:Souscategories' => '?',
            'App\\Controller\\AdminAccueilController:accueil' => '?',
            'App\\Controller\\Api\\ApiController:DeleteProduit' => '?',
            'App\\Controller\\Api\\ApiController:DeleteSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController:InsertProduit' => '?',
            'App\\Controller\\Api\\ApiController:InsertSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController:Produit' => '?',
            'App\\Controller\\Api\\ApiController:ProduitsListe' => '?',
            'App\\Controller\\Api\\ApiController:SousCategorieListe' => '?',
            'App\\Controller\\Api\\ApiController:UpdateProduit' => '?',
            'App\\Controller\\Api\\ApiController:UpdateSousCategorie' => '?',
            'App\\Controller\\Api\\ApiController:UploadFile' => '?',
            'App\\Controller\\Api\\ApiController:sousCategorie' => '?',
            'App\\Controller\\ContenirController:ValidationCommande' => '?',
            'App\\Controller\\ContenirController:index' => '?',
            'App\\Controller\\ContenirController:infos_client' => '?',
            'App\\Controller\\ContenirController:panier_add' => '?',
            'App\\Controller\\FactureController:facture' => '?',
            'App\\Controller\\FactureController:facturePdf' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:new' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\UserController:AjoutClient' => '?',
            'App\\Controller\\UserController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
