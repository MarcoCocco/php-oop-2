<?php
require_once './Models/Product.php';

//Creo una classe giochi più specifica che estende la classe Prodotto
class ToyProduct extends Product
{
    use Reviewable;

    public $material;
    public $size;

    function __construct(string $name, string $image, string $description, float $price, string $categoryIcon, string $cardProductType, string $material, float $size)
    {
        parent::__construct($name, $image, $description, $price, $categoryIcon, $cardProductType);
        $this->material = $material;
        $this->size = $size;
    }
}