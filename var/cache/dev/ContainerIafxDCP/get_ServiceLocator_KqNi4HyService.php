<?php

namespace ContainerIafxDCP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KqNi4HyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kqNi4Hy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kqNi4Hy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepository' => ['privates', 'App\\Core\\User\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepository' => 'App\\Core\\User\\Repository\\UserRepository',
        ]);
    }
}
