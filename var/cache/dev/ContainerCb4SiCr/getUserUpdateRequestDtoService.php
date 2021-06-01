<?php

namespace ContainerCb4SiCr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserUpdateRequestDtoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\User\Dto\UserUpdateRequestDto' shared autowired service.
     *
     * @return \App\Api\User\Dto\UserUpdateRequestDto
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/User/Dto/UserUpdateRequestDto.php';

        return $container->privates['App\\Api\\User\\Dto\\UserUpdateRequestDto'] = new \App\Api\User\Dto\UserUpdateRequestDto();
    }
}
