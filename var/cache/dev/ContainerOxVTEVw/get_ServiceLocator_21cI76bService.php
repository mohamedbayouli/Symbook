<?php

namespace ContainerOxVTEVw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_21cI76bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.21cI76b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.21cI76b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'livre' => ['privates', '.errored..service_locator.21cI76b.App\\Entity\\Livre', NULL, 'Cannot autowire service ".service_locator.21cI76b": it needs an instance of "App\\Entity\\Livre" but this type has been excluded in "config/services.yaml".'],
        ], [
            'livre' => 'App\\Entity\\Livre',
        ]);
    }
}
