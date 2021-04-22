<?php


namespace kollex\Service;


use kollex\Dataprovider\Assortment\DataProvider;

class ProductExportService implements DataProvider
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

    public function getProducts(): array
    {
        return $this->mapper->setData($this->source->convert())->map();
    }
}
