<?php
require_once './Models/Product.php';
require_once './Models/ExpirationDate.php';
//Creo una classe cibo più specifica che estende la classe Prodotto
class FoodProduct extends Product
{
    use Reviewable;
    
    public $expirationDate;
    public $weight;

    function __construct(string $name, string $image, string $description, float $price, string $categoryIcon, string $cardProductType, ExpirationDate $expirationDate, int $weight)
    {
        parent::__construct($name, $image, $description, $price, $categoryIcon, $cardProductType);
        $this->expirationDate = $expirationDate;
        $this->weight = $weight;
    }
}
