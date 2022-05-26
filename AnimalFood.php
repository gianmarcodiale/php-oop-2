<?php

class AnimalFood extends Product
{
    protected $animal_type;
    protected $food_type;
    protected $weight;

    function __construct(string $name, string $category, int $discount, string $animal_type, string $food_type, int $weight) {
        parent:: __construct($name, $category, $discount);
        $this->animal_type = $animal_type;
        $this->food_type = $food_type;
        $this->weight = $weight;
    }
}