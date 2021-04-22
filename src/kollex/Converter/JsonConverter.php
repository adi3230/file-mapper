<?php


namespace kollex\Converter;

class JsonConverter implements ConverterInterface
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

    public function convert(): array
    {
        $fileContent = file_get_contents($this->file);

        return json_decode($fileContent, true);
    }
}
