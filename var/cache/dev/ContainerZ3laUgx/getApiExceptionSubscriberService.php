<?php

namespace ContainerZ3laUgx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Core\Common\EventSubscriber\ApiExceptionSubscriber' shared autowired service.
     *
     * @return \App\Core\Common\EventSubscriber\ApiExceptionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Core/Common/EventSubscriber/ApiExceptionSubscriber.php';

        return $container->privates['App\\Core\\Common\\EventSubscriber\\ApiExceptionSubscriber'] = new \App\Core\Common\EventSubscriber\ApiExceptionSubscriber(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
