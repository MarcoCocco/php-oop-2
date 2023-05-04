<?php
//creo la classe categoria che può essere "cani" o "gatti", con un nome e un'icona associata.
class Category
{
    public $categoryName;
    public $icon;

    function __construct(string $categoryName, string $icon)
    {
        $this->categoryName = $categoryName;
        $this->icon = $icon;
    }
}
