<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__LAy1RCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..lAy1RC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..lAy1RC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cat' => ['privates', '.errored.5fl3Q4_', NULL, 'Cannot determine controller argument for "App\\Controller\\ProduitController::show()": the $cat argument is type-hinted with the non-existent class or interface: "App\\Controller\\RubriqueRepository". Did you forget to add a use statement?'],
            'prod' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'cat' => '?',
            'prod' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
