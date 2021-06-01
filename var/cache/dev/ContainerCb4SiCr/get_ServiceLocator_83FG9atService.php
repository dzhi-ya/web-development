<?php

namespace ContainerCb4SiCr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_83FG9atService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.83FG9at' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.83FG9at'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepository' => ['privates', 'App\\Core\\User\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepository' => 'App\\Core\\User\\Repository\\UserRepository',
        ]);
    }
}
