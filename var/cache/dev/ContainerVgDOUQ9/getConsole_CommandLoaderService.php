<?php

namespace ContainerVgDOUQ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Core\\User\\Command\\CreateUser' => ['privates', 'App\\Core\\User\\Command\\CreateUser', 'getCreateUserService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand', 'getClearMetadataCacheDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand', 'getCreateSchemaDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand', 'getDropSchemaDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand', 'getGenerateHydratorsDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand', 'getGenerateProxiesDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand', 'getInfoDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand', 'getLoadDataFixturesDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand', 'getQueryDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand', 'getShardDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand', 'getTailCursorDoctrineODMCommandService', true],
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand' => ['privates', 'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand', 'getUpdateSchemaDoctrineODMCommandService', true],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', true],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', true],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', true],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', true],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', true],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', true],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', true],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', true],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', true],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', true],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', true],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', true],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', true],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', true],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', true],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', true],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', true],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', true],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', true],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', true],
            'console.command.validator_debug' => ['privates', 'console.command.validator_debug', 'getConsole_Command_ValidatorDebugService', true],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', true],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', true],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', true],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', true],
        ], [
            'App\\Core\\User\\Command\\CreateUser' => 'App\\Core\\User\\Command\\CreateUser',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.validator_debug' => 'Symfony\\Component\\Validator\\Command\\DebugCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['app:core:create-user' => 'App\\Core\\User\\Command\\CreateUser', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:validator' => 'console.command.validator_debug', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:mongodb:cache:clear-metadata' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand', 'doctrine:mongodb:schema:create' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand', 'doctrine:mongodb:schema:drop' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand', 'doctrine:mongodb:generate:hydrators' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand', 'doctrine:mongodb:generate:proxies' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand', 'doctrine:mongodb:mapping:info' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand', 'doctrine:mongodb:fixtures:load' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand', 'doctrine:mongodb:query' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand', 'doctrine:mongodb:schema:shard' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand', 'doctrine:mongodb:tail-cursor' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand', 'doctrine:mongodb:schema:update' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint']);
    }
}
