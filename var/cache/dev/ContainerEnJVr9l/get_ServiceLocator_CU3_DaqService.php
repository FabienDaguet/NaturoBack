<?php

namespace ContainerEnJVr9l;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CU3_DaqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cU3.daq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cU3.daq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.cU3.daq.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.cU3.daq": it references class "App\\Entity\\Category" but no such service exists.'],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'paginator' => '?',
            'postsRepository' => 'App\\Repository\\PostsRepository',
        ]);
    }
}