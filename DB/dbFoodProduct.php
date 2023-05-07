<?php
require_once './Models/ExpirationDate.php';
require_once './Models/Product.php';
require_once './Models/FoodProduct.php';

$crocchette = new FoodProduct('Royal Canin Croccantini', 'https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY741_.jpg', 'Croccantini di pollo per cani di taglia piccola', 16.50, 'fa-solid fa-dog', 'Cibo', new ExpirationDate(2026, 06, 23), 1000);
$crocchette->setReview("L'alito del mio cane non è mai stato così buono, grazie a queste crocchette!");
$crocchette->setReview("Le ho provate e piacciono addirittura a me.");

$pate = new FoodProduct('Royal Canin Paté', 'https://www.zampashop.com/12851/2149.jpg', 'Paté di tonno Royal Canin per gatti cuccioli', 7.50, 'fa-solid fa-cat', 'Cibo', new ExpirationDate(2027, 05, 28), 150);
$pate->setReview('Il mio micetto lo adora, non può farne a meno, e neanche io.');
$foodProducts[] = $crocchette;
$foodProducts[] = $pate;
