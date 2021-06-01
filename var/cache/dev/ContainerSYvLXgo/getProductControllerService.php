<?php

namespace ContainerSYvLXgo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Api\Product\Controller\ProductController' shared autowired service.
     *
     * @return \App\Api\Product\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Api/Product/Controller/ProductController.php';

        $container->services['App\\Api\\Product\\Controller\\ProductController'] = $instance = new \App\Api\Product\Controller\ProductController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Api\\Product\\Controller\\ProductController', $container));

        return $instance;
    }
}
