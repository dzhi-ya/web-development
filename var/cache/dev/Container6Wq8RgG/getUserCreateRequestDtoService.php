<?php

namespace Container6Wq8RgG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCreateRequestDtoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\User\Dto\UserCreateRequestDto' shared autowired service.
     *
     * @return \App\Api\User\Dto\UserCreateRequestDto
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/User/Dto/UserCreateRequestDto.php';

        return $container->privates['App\\Api\\User\\Dto\\UserCreateRequestDto'] = new \App\Api\User\Dto\UserCreateRequestDto();
    }
}
