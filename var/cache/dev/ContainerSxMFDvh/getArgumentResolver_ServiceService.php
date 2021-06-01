<?php

namespace ContainerSxMFDvh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Api\\Product\\Controller\\ProductController::create' => ['privates', '.service_locator.1gp2Dhs', 'get_ServiceLocator_1gp2DhsService', true],
            'App\\Api\\Product\\Controller\\ProductController::delete' => ['privates', '.service_locator.qH3xF1a', 'get_ServiceLocator_QH3xF1aService', true],
            'App\\Api\\Product\\Controller\\ProductController::index' => ['privates', '.service_locator.ZTrBmPi', 'get_ServiceLocator_ZTrBmPiService', true],
            'App\\Api\\Product\\Controller\\ProductController::update' => ['privates', '.service_locator.RAjghLu', 'get_ServiceLocator_RAjghLuService', true],
            'App\\Api\\Product\\Controller\\ProductController::validation' => ['privates', '.service_locator.X_neJFo', 'get_ServiceLocator_XNeJFoService', true],
            'App\\Api\\User\\Controller\\UserController::create' => ['privates', '.service_locator.ExsQNNo', 'get_ServiceLocator_ExsQNNoService', true],
            'App\\Api\\User\\Controller\\UserController::createContact' => ['privates', '.service_locator.s_p9o7R', 'get_ServiceLocator_SP9o7RService', true],
            'App\\Api\\User\\Controller\\UserController::delete' => ['privates', '.service_locator.kqNi4Hy', 'get_ServiceLocator_KqNi4HyService', true],
            'App\\Api\\User\\Controller\\UserController::index' => ['privates', '.service_locator.83FG9at', 'get_ServiceLocator_83FG9atService', true],
            'App\\Api\\User\\Controller\\UserController::show' => ['privates', '.service_locator.s_p9o7R', 'get_ServiceLocator_SP9o7RService', true],
            'App\\Api\\User\\Controller\\UserController::update' => ['privates', '.service_locator.2MKwkl1', 'get_ServiceLocator_2MKwkl1Service', true],
            'App\\Api\\User\\Controller\\UserController::validation' => ['privates', '.service_locator.UIBWQx1', 'get_ServiceLocator_UIBWQx1Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Api\\Product\\Controller\\ProductController:create' => ['privates', '.service_locator.1gp2Dhs', 'get_ServiceLocator_1gp2DhsService', true],
            'App\\Api\\Product\\Controller\\ProductController:delete' => ['privates', '.service_locator.qH3xF1a', 'get_ServiceLocator_QH3xF1aService', true],
            'App\\Api\\Product\\Controller\\ProductController:index' => ['privates', '.service_locator.ZTrBmPi', 'get_ServiceLocator_ZTrBmPiService', true],
            'App\\Api\\Product\\Controller\\ProductController:update' => ['privates', '.service_locator.RAjghLu', 'get_ServiceLocator_RAjghLuService', true],
            'App\\Api\\Product\\Controller\\ProductController:validation' => ['privates', '.service_locator.X_neJFo', 'get_ServiceLocator_XNeJFoService', true],
            'App\\Api\\User\\Controller\\UserController:create' => ['privates', '.service_locator.ExsQNNo', 'get_ServiceLocator_ExsQNNoService', true],
            'App\\Api\\User\\Controller\\UserController:createContact' => ['privates', '.service_locator.s_p9o7R', 'get_ServiceLocator_SP9o7RService', true],
            'App\\Api\\User\\Controller\\UserController:delete' => ['privates', '.service_locator.kqNi4Hy', 'get_ServiceLocator_KqNi4HyService', true],
            'App\\Api\\User\\Controller\\UserController:index' => ['privates', '.service_locator.83FG9at', 'get_ServiceLocator_83FG9atService', true],
            'App\\Api\\User\\Controller\\UserController:show' => ['privates', '.service_locator.s_p9o7R', 'get_ServiceLocator_SP9o7RService', true],
            'App\\Api\\User\\Controller\\UserController:update' => ['privates', '.service_locator.2MKwkl1', 'get_ServiceLocator_2MKwkl1Service', true],
            'App\\Api\\User\\Controller\\UserController:validation' => ['privates', '.service_locator.UIBWQx1', 'get_ServiceLocator_UIBWQx1Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Api\\Product\\Controller\\ProductController::create' => '?',
            'App\\Api\\Product\\Controller\\ProductController::delete' => '?',
            'App\\Api\\Product\\Controller\\ProductController::index' => '?',
            'App\\Api\\Product\\Controller\\ProductController::update' => '?',
            'App\\Api\\Product\\Controller\\ProductController::validation' => '?',
            'App\\Api\\User\\Controller\\UserController::create' => '?',
            'App\\Api\\User\\Controller\\UserController::createContact' => '?',
            'App\\Api\\User\\Controller\\UserController::delete' => '?',
            'App\\Api\\User\\Controller\\UserController::index' => '?',
            'App\\Api\\User\\Controller\\UserController::show' => '?',
            'App\\Api\\User\\Controller\\UserController::update' => '?',
            'App\\Api\\User\\Controller\\UserController::validation' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Api\\Product\\Controller\\ProductController:create' => '?',
            'App\\Api\\Product\\Controller\\ProductController:delete' => '?',
            'App\\Api\\Product\\Controller\\ProductController:index' => '?',
            'App\\Api\\Product\\Controller\\ProductController:update' => '?',
            'App\\Api\\Product\\Controller\\ProductController:validation' => '?',
            'App\\Api\\User\\Controller\\UserController:create' => '?',
            'App\\Api\\User\\Controller\\UserController:createContact' => '?',
            'App\\Api\\User\\Controller\\UserController:delete' => '?',
            'App\\Api\\User\\Controller\\UserController:index' => '?',
            'App\\Api\\User\\Controller\\UserController:show' => '?',
            'App\\Api\\User\\Controller\\UserController:update' => '?',
            'App\\Api\\User\\Controller\\UserController:validation' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
