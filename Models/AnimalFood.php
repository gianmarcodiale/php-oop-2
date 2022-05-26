<?php

class AnimalFood extends Product
{
    protected $animal_type;
    protected $food_type;
    protected $weight;

    function __construct(string $name, string $category, bool $has_discount, int $discount, int $price, string $animal_type, string $food_type, int $weight) {
        parent:: __construct($name, $category, $has_discount, $discount, $price);
        $this->animal_type = $animal_type;
        $this->food_type = $food_type;
        $this->weight = $weight;
    }
}