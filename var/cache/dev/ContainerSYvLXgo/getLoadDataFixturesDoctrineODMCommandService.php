<?php

namespace ContainerSYvLXgo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadDataFixturesDoctrineODMCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/DoctrineODMCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/LoadDataFixturesDoctrineODMCommand.php';

        $container->privates['Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand(($container->services['doctrine_mongodb'] ?? $container->getDoctrineMongodbService()), ($container->services['kernel'] ?? $container->get('kernel', 2)), NULL);

        $instance->setName('doctrine:mongodb:fixtures:load');

        return $instance;
    }
}
