<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Mesavolt\BootstrapIndicatorBundle\DataCollector\BootstrapIndicatorCollector;

return function (ContainerConfigurator $container): void {
    // default configuration for services in *this* file
    $services = $container->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    $services->set('mesavolt-bootstrap-indicator-collector')
        ->class(BootstrapIndicatorCollector::class)
        ->tag('data_collector', [
            'id' => BootstrapIndicatorCollector::NAME,
        ])
    ;
};
