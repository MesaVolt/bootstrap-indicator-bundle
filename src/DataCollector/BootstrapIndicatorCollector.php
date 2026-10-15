<?php

namespace Mesavolt\BootstrapIndicatorBundle\DataCollector;


use Composer\InstalledVersions;
use Composer\Semver\Semver;
use Symfony\Bundle\FrameworkBundle\DataCollector\AbstractDataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BootstrapIndicatorCollector extends AbstractDataCollector
{
    public const NAME = 'mesavolt-bootstrap-indicator-collector';
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
    {
        $symfonyVersion = InstalledVersions::getVersion('symfony/http-kernel') ?? '0';
        $use6dot2Design = Semver::satisfies($symfonyVersion, '>=6.2');

        $this->data['design_version'] = $use6dot2Design ? '>=6.2' : '<6.2';
    }

    public function getDesignVersion(): string
    {
        return $this->data['design_version'];
    }

    public static function getTemplate(): ?string
    {
        return '@MesavoltBootstrapIndicator/DataCollector/bootstrap_indicator_data_collector.html.twig';
    }

    public function getName(): string
    {
        // this name is used to tag the collector in the container and also injected in the template by Symfony
        return self::NAME;
    }
}
