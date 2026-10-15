<?php

namespace Mesavolt\BootstrapIndicatorBundle;


use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Component\DepencompdencyInjection\Kernel\RequiredBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;


#[RequiredBundle(WebProfilerBundle::class)]
class MesavoltBootstrapIndicatorBundle extends Bundle
{
}
