<?php

namespace Container4KN0tsz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Api\Common\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Api\Common\Controller\DefaultController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/Common/Controller/DefaultController.php';

        return $container->services['App\\Api\\Common\\Controller\\DefaultController'] = new \App\Api\Common\Controller\DefaultController();
    }
}
