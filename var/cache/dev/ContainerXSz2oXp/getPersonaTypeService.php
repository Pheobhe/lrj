<?php

namespace ContainerXSz2oXp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PersonaType' shared autowired service.
     *
     * @return \App\Form\PersonaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PersonaType.php';

        return $container->privates['App\\Form\\PersonaType'] = new \App\Form\PersonaType();
    }
}
