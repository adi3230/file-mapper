<?php


namespace kollex\Converter;

class CsvConverter implements ConverterInterface
{
    private $file;

    public function __construct($path)
    {
        $this->file = $this->openCsv($path);
    }

    public function convert(): array
    {
        $assoc_array = array();
        $row = 0;
        if (($handle = $this->file) !== false) {
            while (($data = $this->readCsv()) !== false) {
                $assoc_array[$row] = $data;
                $row++;
            }
            $this->closeCsv();
        }

        return $assoc_array;
    }

    private function openCsv($source)
    {
        return fopen($source, "r");
    }

    private function closeCsv()
    {
        return fclose($this->file);
    }

    private function readCsv()
    {
        return fgetcsv($this->file, 1000, ';');
    }
}
