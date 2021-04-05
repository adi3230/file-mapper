<?php


namespace kollex\Converter;


use kollex\Dataprovider\Assortment\DataProvider;

class JsonConverter implements DataProvider
{
    private string $file;

    /**
     * Json constructor.
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->file = $path;
    }

    public function getProducts(): array
    {
        $fileContent = file_get_contents($this->file);

        return json_decode($fileContent, true);
    }
}
