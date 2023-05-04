<?php

class CardProduct {
    public $cardImage;
    public $cardTitle;
    public $cardPrice;
    public $cardCategoryIcon;
    public $cardProductType;

    function __construct(string $cardImage, string $cardTitle, float $cardPrice, string $cardCategoryIcon, string $cardProductType)
    {
        $this->cardImage = $cardImage;
        $this->cardTitle = $cardTitle;
        $this->cardPrice = $cardPrice;
        $this->cardCategoryIcon = $cardCategoryIcon;
        $this->cardProductType = $cardProductType;
    }
}