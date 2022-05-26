<?php

class AnimalToys extends Product
{
    protected $animal_type;
    protected $color;

    function __construct(string $name, string $category, bool $has_discount, int $discount, int $price, string $animal_type, string $color) {
        parent:: __construct($name, $category, $has_discount, $discount, $price);
        $this->animal_type = $animal_type;
        $this->color = $color;
    }
}