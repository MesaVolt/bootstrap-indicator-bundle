<?php

namespace Mesavolt\BootstrapIndicatorBundle;


use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Component\DependencyInjection\Kernel\RequiredBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\Bundle;


#[RequiredBundle(WebProfilerBundle::class)]
class MesavoltBootstrapIndicatorBundle extends Bundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.php');
    }
}
