<?php


namespace kollex\Service;


class ProductExportService implements ProductExportServiceInterface
{
    private $source;
    private $mapper;

    /**
     * ProductExportService constructor.
     *
     * @param object $source
     * @param object $mapper
     */
    public function __construct(object $source, object $mapper)
    {
        $this->source = $source;
        $this->mapper = $mapper;
    }

    public function export(): string
    {
        return json_encode($this->mapper->setData($this->source->getProducts())->map(), JSON_PRETTY_PRINT);
    }
}
