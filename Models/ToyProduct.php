<?php
//Creo una classe giochi più specifica che estende la classe Prodotto
class ToyProduct extends Product
{
    public $material;
    public $size;

    function __construct(string $name, string $image, string $description, float $price, array $material, float $size)
    {
        $this->material = $material;
        $this->size = $size;
    }
}