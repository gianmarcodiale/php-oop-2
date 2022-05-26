<?php

class Product
{
    protected $name;
    protected $category;
    protected $has_discount;
    protected $discount;
    protected $price;

    function __construct(string $name, string $category, bool $has_discount, int $discount, int $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->has_discount = $has_discount;
        $this->discount = $discount;
        $this->price = $price;
    }

    public function setDiscount(User $user)
    {
        if ($user->is_logged = true) {
            var_dump("Complimenti sei registrato! Hai diritto ad uno sconto del 20%.");
            $this->discount = 20;
            $this->price = $this->price - ($this->price * $this->discount / 100);
        } 
    }
}
