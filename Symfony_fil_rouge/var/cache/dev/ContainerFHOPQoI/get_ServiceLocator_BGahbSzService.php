<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BGahbSzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bGahbSz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bGahbSz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sousCategorie' => ['privates', '.errored..service_locator.bGahbSz.App\\Entity\\SousCategorie', NULL, 'Cannot autowire service ".service_locator.bGahbSz": it references class "App\\Entity\\SousCategorie" but no such service exists.'],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'manager' => '?',
            'sousCategorie' => 'App\\Entity\\SousCategorie',
            'validator' => '?',
        ]);
    }
}
