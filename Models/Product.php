<?php
//Creo una classe Prodotto generica dello shop con informazioni base
class Product
{
    public $name;
    public $image;
    public $description;
    public $price;

    function __construct(string $name, string $image, string $description, float $price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }
}
