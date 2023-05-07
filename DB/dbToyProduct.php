<?php

require_once './Models/Product.php';
require_once './Models/ToyProduct.php';

$pallina = new ToyProduct('Pallina ZX2000', 'https://shop-cdn-m.mediazs.com/bilder/chuckit/palle/gioco/ultra/s/7/800/99607_petmate_chuckit_ultraball_small_hs_02_7.jpg', 'Pallina in plastica per cani', 12.50, 'fa-solid fa-dog', 'Giochi', 'Plastica', 6.5, );
$pallina->setReview("Questa pallina è fantastica! Il mio cane adora giocarci.");
$pallina->setReview("Molto resistente, anche dopo diversi mesi di utilizzo.");

$topo = new ToyProduct('Topo Peluche HD3100', 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwd5b9dc4d/158264.jpg', 'Topo di peluches per gatti', 9.30, 'fa-solid fa-cat', 'Giochi', 'peluches', 4.5);
$topo->setReview("Il mio gatto adora questo giocattolo!");

$toyProducts[] = $pallina;
$toyProducts[] = $topo;
