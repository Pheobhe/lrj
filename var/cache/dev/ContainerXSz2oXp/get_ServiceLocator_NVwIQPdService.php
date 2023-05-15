<?php

namespace ContainerXSz2oXp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NVwIQPdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NVwIQPd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NVwIQPd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tableFactory' => ['services', 'hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory', 'getHelloSebastianHelloBootstrapTable_HelloBootstrapTableFactoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'tableFactory' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}