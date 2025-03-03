<?php

namespace ContainerSXKHfXg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B4godJnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B4godJn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B4godJn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CsvImportController::importCsv' => ['privates', '.service_locator.egipcEH.App\\Controller\\CsvImportController::importCsv()', 'getCsvImportControllerimportCsvService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CsvImportController:importCsv' => ['privates', '.service_locator.egipcEH.App\\Controller\\CsvImportController::importCsv()', 'getCsvImportControllerimportCsvService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\CsvImportController::importCsv' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\CsvImportController:importCsv' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:delete' => '?',
        ]);
    }
}
