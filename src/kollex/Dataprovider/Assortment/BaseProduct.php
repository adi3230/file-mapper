<?php


namespace kollex\Dataprovider\Assortment;


class BaseProduct implements Product
{
    private string $id = '';
    private string $gtin = '';
    private string $manufacturer = '';
    private string $name = '';
    private string $packaging = '';
    private string $baseProductPackaging = '';
    private string $baseProductUnit = '';
    private float $baseProductAmount;
    private int $baseProductQuantity = 1;


    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getGtin(): string
    {
        return $this->gtin;
    }

    /**
     * @param string $gtin
     */
    public function setGtin(string $gtin)
    {
        $this->gtin = $gtin;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer(string $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPackaging(): string
    {
        return $this->packaging;
    }

    /**
     * @param string $packaging
     */
    public function setPackaging(string $packaging)
    {
        $this->packaging = $packaging;
    }

    /**
     * @return string
     */
    public function getBaseProductPackaging(): string
    {
        return $this->baseProductPackaging;
    }

    /**
     * @param string $baseProductPackaging
     */
    public function setBaseProductPackaging(string $baseProductPackaging)
    {
        $this->baseProductPackaging = $baseProductPackaging;
    }

    /**
     * @return string
     */
    public function getBaseProductUnit(): string
    {
        return $this->baseProductUnit;
    }

    /**
     * @param string $baseProductUnit
     */
    public function setBaseProductUnit(string $baseProductUnit)
    {
        $this->baseProductUnit = $baseProductUnit;
    }

    /**
     * @return float
     */
    public function getBaseProductAmount(): float
    {
        return $this->baseProductAmount;
    }

    /**
     * @param float $baseProductAmount
     */
    public function setBaseProductAmount(float $baseProductAmount)
    {
        $this->baseProductAmount = $baseProductAmount;
    }

    /**
     * @return int
     */
    public function getBaseProductQuantity(): int
    {
        return $this->baseProductQuantity;
    }

    /**
     * @param int $baseProductQuantity
     */
    public function setBaseProductQuantity(int $baseProductQuantity)
    {
        $this->baseProductQuantity = $baseProductQuantity;
    }
}
