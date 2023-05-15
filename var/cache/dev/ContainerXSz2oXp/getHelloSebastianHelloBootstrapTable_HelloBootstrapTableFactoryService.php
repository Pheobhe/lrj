<?php

namespace ContainerXSz2oXp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHelloSebastianHelloBootstrapTable_HelloBootstrapTableFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory' shared service.
     *
     * @return \HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hello-sebastian/hello-bootstrap-table-bundle/src/HelloBootstrapTableFactory.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'])) {
            return $container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'];
        }
        $b = ($container->privates['twig'] ?? $container->getTwigService());

        if (isset($container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'])) {
            return $container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'];
        }
        $c = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'])) {
            return $container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'];
        }

        return $container->services['hello_sebastian_hello_bootstrap_table.hello_bootstrap_table_factory'] = new \HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory(($container->services['router'] ?? $container->getRouterService()), $a, $b, $c, ['table_dataset_options' => ['icons' => []], 'table_options' => [], 'action_button_options' => []]);
    }
}
