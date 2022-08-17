<?php

namespace ContainerFHOPQoI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'messenger.transport.async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
        ], [
            'async' => '?',
            'messenger.transport.async' => '?',
        ]);
    }
}
