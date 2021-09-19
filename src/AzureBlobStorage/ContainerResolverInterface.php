<?php

namespace League\Flysystem\AzureBlobStorage;

interface ContainerResolverInterface
{
    public function __invoke(string $container): string;
}
