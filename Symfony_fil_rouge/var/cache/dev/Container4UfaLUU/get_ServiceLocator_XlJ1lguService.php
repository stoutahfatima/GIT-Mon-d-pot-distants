<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XlJ1lguService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xlJ1lgu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xlJ1lgu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'commande' => ['privates', '.errored..service_locator.xlJ1lgu.App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.xlJ1lgu": it references class "App\\Entity\\Commande" but no such service exists.'],
        ], [
            'client' => 'App\\Repository\\ClientRepository',
            'commande' => 'App\\Entity\\Commande',
        ]);
    }
}
