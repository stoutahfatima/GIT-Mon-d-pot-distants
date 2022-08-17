<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MKSKpEZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MKSKpEZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MKSKpEZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produit' => ['privates', '.errored..service_locator.MKSKpEZ.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.MKSKpEZ": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
