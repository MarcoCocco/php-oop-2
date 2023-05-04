<?php
//Creo una classe Prodotto generica dello shop con informazioni base
class Product
{
    public $name;
    public $image;
    public $description;
    public $price;
    public $categoryIcon;
    public $cardProductType;

    function __construct(string $name, string $image, string $description, float $price, string $categoryIcon, string $cardProductType)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->categoryIcon = $categoryIcon;
        $this->cardProductType = $cardProductType;
    }
}

