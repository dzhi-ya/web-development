<?php

namespace ContainerVgDOUQ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1gp2DhsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1gp2Dhs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1gp2Dhs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productRepository' => ['privates', 'App\\Core\\Product\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'requestDto' => ['privates', 'App\\Api\\Product\\Dto\\ProductCreateRequestDto', 'getProductCreateRequestDtoService', true],
            'validationErrors' => ['privates', '.errored..service_locator.1gp2Dhs.Symfony\\Component\\Validator\\ConstraintViolationListInterface', NULL, 'Cannot autowire service ".service_locator.1gp2Dhs": it references interface "Symfony\\Component\\Validator\\ConstraintViolationListInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'productRepository' => 'App\\Core\\Product\\Repository\\ProductRepository',
            'requestDto' => 'App\\Api\\Product\\Dto\\ProductCreateRequestDto',
            'validationErrors' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ]);
    }
}
