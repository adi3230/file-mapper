<?php


namespace kollex\Mapper;


interface MapperInterface
{
    public function map(): array;
    public function setData($data);
    public function getData();
}
