<?php

namespace kollex\Converter;

use PHPUnit\Framework\TestCase;

class JsonConverterTest extends TestCase
{
    public function testCreateJsonConverter(): void
    {
        $test = new JsonConverter('test/mocks/mockJson.json');
        $this->assertEquals('kollex\Converter\JsonConverter', \get_class($test));
    }

}
