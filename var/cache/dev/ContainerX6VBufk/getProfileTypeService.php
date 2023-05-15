<?php

namespace ContainerX6VBufk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProfileType' shared autowired service.
     *
     * @return \App\Form\ProfileType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProfileType.php';

        return $container->privates['App\\Form\\ProfileType'] = new \App\Form\ProfileType();
    }
}
