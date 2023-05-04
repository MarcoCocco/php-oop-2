<?php
//Creo una classe cibo più specifica che estende la classe Prodotto
class FoodProduct extends Product
{
    public $expirationDate;
    public $weight;

    function __construct(string $name, string $image, string $description, float $price, Category $categoryIcon, ExpirationDate $expirationDate, int $weight)
    {
        $this->expirationDate = $expirationDate;
        $this->weight = $weight;
    }
}
