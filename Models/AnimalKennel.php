<?php

class AnimalKennel extends Product
{
    protected $animal_type;
    protected $color;
    protected $weight;

    function __construct(string $name, string $category, bool $has_discount, int $discount, int $price, string $animal_type, string $color, int $weight) {
        parent:: __construct($name, $category, $has_discount, $discount, $price);
        $this->animal_type = $animal_type;
        $this->color = $color;
        $this->weight = $weight;
    }
}