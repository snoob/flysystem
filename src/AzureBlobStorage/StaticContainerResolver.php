<?php


namespace League\Flysystem\AzureBlobStorage;


final class StaticContainerResolver implements ContainerResolverInterface
{
    /**
     * @var string
     */
    private $container;

    public function __construct(string $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(string $path): string
    {
        return $this->container;
    }
}
