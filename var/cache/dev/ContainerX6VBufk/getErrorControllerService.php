<?php

namespace ContainerX6VBufk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/ErrorRenderer/TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($container->services['http_kernel'] ?? $container->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($container->privates['debug.serializer'] ?? $container->load('getDebug_SerializerService')), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($container->privates['twig'] ?? $container->getTwigService()), ($container->privates['error_handler.error_renderer.html'] ?? $container->load('getErrorHandler_ErrorRenderer_HtmlService')), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true)));
    }
}
