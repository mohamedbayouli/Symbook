<?php

namespace ContainerOxVTEVw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerupdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.21cI76b.App\Controller\CartController::update()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.21cI76b.App\\Controller\\CartController::update()'] = ($container->privates['.service_locator.21cI76b'] ?? $container->load('get_ServiceLocator_21cI76bService'))->withContext('App\\Controller\\CartController::update()', $container);
    }
}
