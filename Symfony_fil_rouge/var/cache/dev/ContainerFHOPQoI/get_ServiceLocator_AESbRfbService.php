<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AESbRfbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aESbRfb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aESbRfb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'prod' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'souscat' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService', true],
        ], [
            'prod' => 'App\\Repository\\ProduitRepository',
            'souscat' => 'App\\Repository\\SousCategorieRepository',
        ]);
    }
}
