<?php

require_once './Models/Product.php';
require_once './Models/FoodProduct.php';

$crocchette = new FoodProduct('Royal Canin Croccantini', 'https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY741_.jpg', 'Croccantini di pollo per cani di taglia piccola', 16.50, new Category('Cani', 'fa-solid fa-dog'), new ExpirationDate(2026, 06, 23), 1000);

$pate = new FoodProduct('Royal Canin Paté', 'https://www.zampashop.com/12851/2149.jpg', 'Paté di tonno Royal Canin per gatti cuccioli', 7.50, new Category('Gatti', 'fa-solid fa-cat'), new ExpirationDate(2027, 05, 28), 150);

