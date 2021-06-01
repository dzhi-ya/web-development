<?php

namespace ContainerIafxDCP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QH3xF1aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qH3xF1a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qH3xF1a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productRepository' => ['privates', 'App\\Core\\Product\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'productRepository' => 'App\\Core\\Product\\Repository\\ProductRepository',
        ]);
    }
}
