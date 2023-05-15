<?php

namespace ContainerXSz2oXp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E1dHoNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e1d_HoN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e1d_HoN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actividadRepository' => ['privates', 'App\\Repository\\ActividadRepository', 'getActividadRepositoryService', true],
        ], [
            'actividadRepository' => 'App\\Repository\\ActividadRepository',
        ]);
    }
}