<?php

namespace ContainerXSz2oXp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QtcC3n6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QtcC3n6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QtcC3n6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', true],
        ], [
            'pagoRepository' => 'App\\Repository\\PagoRepository',
        ]);
    }
}
