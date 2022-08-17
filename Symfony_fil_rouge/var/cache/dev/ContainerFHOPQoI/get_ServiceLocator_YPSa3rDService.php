<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YPSa3rDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YPSa3rD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YPSa3rD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cat' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'client' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'prod' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'user' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'cat' => 'App\\Repository\\CategorieRepository',
            'client' => 'App\\Repository\\ClientRepository',
            'manager' => '?',
            'prod' => 'App\\Repository\\ProduitRepository',
            'user' => 'App\\Repository\\UserRepository',
        ]);
    }
}