<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Awiw3jmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Awiw3jm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Awiw3jm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cat' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'sousrepo' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService', true],
        ], [
            'cat' => 'App\\Repository\\CategorieRepository',
            'repo' => 'App\\Repository\\ProduitRepository',
            'sousrepo' => 'App\\Repository\\SousCategorieRepository',
        ]);
    }
}
