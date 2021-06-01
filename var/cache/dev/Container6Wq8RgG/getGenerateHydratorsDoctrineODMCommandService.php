<?php

namespace Container6Wq8RgG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateHydratorsDoctrineODMCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Doctrine\Bundle\MongoDBBundle\Command\GenerateHydratorsDoctrineODMCommand' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\GenerateHydratorsDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/GenerateHydratorsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/GenerateHydratorsDoctrineODMCommand.php';

        $container->privates['Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\GenerateHydratorsDoctrineODMCommand();

        $instance->setName('doctrine:mongodb:generate:hydrators');

        return $instance;
    }
}
