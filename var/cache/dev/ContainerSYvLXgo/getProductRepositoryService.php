<?php

namespace ContainerSYvLXgo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Core\Product\Repository\ProductRepository' shared autowired service.
     *
     * @return \App\Core\Product\Repository\ProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Repository/DocumentRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceDocumentRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceRepositoryTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceDocumentRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Common/Repository/AbstractRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Product/Repository/ProductRepository.php';

        return $container->privates['App\\Core\\Product\\Repository\\ProductRepository'] = new \App\Core\Product\Repository\ProductRepository(($container->services['doctrine_mongodb'] ?? $container->getDoctrineMongodbService()));
    }
}
