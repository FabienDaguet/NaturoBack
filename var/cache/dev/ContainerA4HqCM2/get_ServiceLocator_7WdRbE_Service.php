<?php

namespace ContainerA4HqCM2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7WdRbE_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7WdRbE.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7WdRbE.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'posts' => ['privates', '.errored..service_locator.7WdRbE..App\\Entity\\Posts', NULL, 'Cannot autowire service ".service_locator.7WdRbE.": it references class "App\\Entity\\Posts" but no such service exists.'],
        ], [
            'posts' => 'App\\Entity\\Posts',
        ]);
    }
}
