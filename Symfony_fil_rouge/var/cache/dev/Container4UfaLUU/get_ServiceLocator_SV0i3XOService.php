<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SV0i3XOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sV0i3XO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sV0i3XO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'souscat' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService', true],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'souscat' => 'App\\Repository\\SousCategorieRepository',
            'validator' => '?',
        ]);
    }
}
