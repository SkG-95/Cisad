<?php

namespace ContainerSXKHfXg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WkfvUVe.App\Controller\UserController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.WkfvUVe'] ?? $container->load('get_ServiceLocator_WkfvUVeService'));

        if (isset($container->privates['.service_locator.WkfvUVe.App\\Controller\\UserController::edit()'])) {
            return $container->privates['.service_locator.WkfvUVe.App\\Controller\\UserController::edit()'];
        }

        return $container->privates['.service_locator.WkfvUVe.App\\Controller\\UserController::edit()'] = $a->withContext('App\\Controller\\UserController::edit()', $container);
    }
}
