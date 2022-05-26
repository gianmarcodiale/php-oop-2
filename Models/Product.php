<?php

class Product
{
    protected $name;
    protected $category;
    protected $discount;

    function __construct(string $name, string $category, int $discount)
    {
        $this->name = $name;
        $this->$category = $category;
        $this->$discount = $discount;
    }
}
