<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J6_HcLRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j6.hcLR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j6.hcLR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produit' => ['privates', '.errored..service_locator.j6.hcLR.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.j6.hcLR": it references class "App\\Entity\\Produit" but no such service exists.'],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'manager' => '?',
            'produit' => 'App\\Entity\\Produit',
            'validator' => '?',
        ]);
    }
}