<?php

namespace ContainerDA3S9f6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCreateRequestDtoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\Product\Dto\ProductCreateRequestDto' shared autowired service.
     *
     * @return \App\Api\Product\Dto\ProductCreateRequestDto
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/Product/Dto/ProductCreateRequestDto.php';

        return $container->privates['App\\Api\\Product\\Dto\\ProductCreateRequestDto'] = new \App\Api\Product\Dto\ProductCreateRequestDto();
    }
}
