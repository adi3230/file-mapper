<?php


namespace kollex\Mapper;


use Exception;
use kollex\Dataprovider\Assortment\BaseProduct;

class CsvMapper implements MapperInterface
{
    private $data;

    private array $baseProductPackaging = array(
        'bottle' => 'BO',
        'can' => 'CN'
    );

    private array $productPackaging = array(
        'bottle' => 'BO',
        'box' => 'BX',
        'case' => 'CA',
        'single' => 'BO'
    );

    private array $productUnits = array(
        'l' => 'LT',
        'g' => 'GR'
    );

    public function setData($data): CsvMapper
    {
        $this->data = $data;
        return $this;
    }

    public function getData(): CsvMapper
    {
        return $this->data;
    }

    public function map(): array
    {
        $mappedProduct = [];
        // Remove first object
        array_shift($this->data);
        if (empty($this->data)) {
            throw new Exception('Please provide an array!');
        }
        foreach ($this->data as $wholesellerProduct) {
            $product = new BaseProduct();
            $product->setId($wholesellerProduct[0]);
            $product->setGtin($wholesellerProduct[1]);
            $product->setManufacturer($wholesellerProduct[2]);
            $product->setName($wholesellerProduct[3]);
            $product->setPackaging($this->productPackaging[strtolower(explode(' ', $wholesellerProduct[5])[0])]);
            $product->setBaseProductPackaging($this->baseProductPackaging[strtolower($wholesellerProduct[7])]);
            $product->setBaseProductUnit($this->productUnits[substr($wholesellerProduct[8], -1)]);
            $product->setBaseProductAmount(substr($wholesellerProduct[8], 0, -1));
            if ($wholesellerProduct[5] == 'single') {
                $product->setBaseProductQuantity(1);
            } else {
                $product->setBaseProductQuantity(explode(' ', $wholesellerProduct[5])[1]);
            }

            $mappedProduct[] = $product;
        }

        return $mappedProduct;
    }
}
