<?php 

class Product {

    public $name;
    public $image;
    public $description;
    public $price;
    protected $discount = 0;

    function __construct(string $name, string $image, string $description, float $price) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }

}