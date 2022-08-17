<?php

namespace Container4UfaLUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QwgC8KqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QwgC8Kq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QwgC8Kq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cat' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService', true],
        ], [
            'cat' => 'App\\Repository\\CategorieRepository',
            'repo' => 'App\\Repository\\SousCategorieRepository',
        ]);
    }
}
