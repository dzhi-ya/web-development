<?php

namespace ContainerCb4SiCr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidationExampleRequestDto2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\Product\Dto\ValidationExampleRequestDto' shared autowired service.
     *
     * @return \App\Api\Product\Dto\ValidationExampleRequestDto
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/Product/Dto/ValidationExampleRequestDto.php';

        return $container->privates['App\\Api\\Product\\Dto\\ValidationExampleRequestDto'] = new \App\Api\Product\Dto\ValidationExampleRequestDto();
    }
}
