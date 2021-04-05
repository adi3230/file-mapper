<?php

require 'vendor/autoload.php';

use kollex\Converter\CsvConverter;
use kollex\Converter\JsonConverter;
use kollex\Mapper\CsvMapper;
use kollex\Mapper\JsonMapper;
use kollex\Service\ProductExportService;

$serviceA = new ProductExportService(new CsvConverter('data/wholesaler_a.csv'), new CsvMapper());
$serviceB = new ProductExportService(new JsonConverter('data/wholesaler_b.json'), new JsonMapper());

echo "==============================";
echo "<pre>";
echo "CSV Display <br>";
print_r($serviceA->export());
echo "==============================";
echo "</pre>";

echo "==============================";
echo "<pre>";
echo "JSON Display <br>";
print_r($serviceB->export());
echo "==============================";
echo "</pre>";
