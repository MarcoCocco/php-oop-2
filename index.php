<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
 -->
<?php
require_once './Trait/Reviewable.php';
require_once './Models/Product.php';
require_once './Models/ExpirationDate.php';
require_once './Models/FoodProduct.php';
require_once './Models/ToyProduct.php';
require_once './DB/dbFoodProduct.php';
require_once './DB/dbToyProduct.php';

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container p-4">
        <div class="row">
            <?php foreach ($foodProducts as $foodProduct) { ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $foodProduct->image ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $foodProduct->name ?></h5>
                            <p class="card-text"><?php echo $foodProduct->description ?></p>
                            <p class="card-text"><strong>Categoria</strong>: <i class="<?php echo $foodProduct->categoryIcon ?>"></i></p>
                            <p class="card-text"><strong>Tipo di Prodotto</strong>: <?php echo $foodProduct->cardProductType ?></p>
                            <p class="card-text"><strong>Peso</strong>: <?php echo $foodProduct->weight ?>g</p>
                            <p class="card-text"><strong>Data di Scadenza</strong>: <?php echo $foodProduct->expirationDate->getFullExpirationDate() ?></p>
                            <?php echo "<p><strong>Recensioni del prodotto:</strong></p>";
                            echo "<ul>";
                            $reviews = $foodProduct->getReviews();
                            foreach ($reviews as $review) {
                                echo "<li>" . $review . "</li>";
                            }
                            echo "</ul>"; ?>
                            <h6 class="card-subtitle mb-2 text-muted"><strong>Prezzo</strong>: <?php echo $foodProduct->price ?>€</h6>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php foreach ($toyProducts as $toyProduct) { ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $toyProduct->image ?>" class="card-img-top object-fit-contain" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $toyProduct->name ?></h5>
                            <p class="card-text"><?php echo $toyProduct->description ?></p>
                            <p class="card-text"><strong>Categoria</strong>: <i class="<?php echo $toyProduct->categoryIcon ?>"></i></p>
                            <p class="card-text"><strong>Tipo di Prodotto</strong>: <?php echo $toyProduct->cardProductType ?></p>
                            <?php echo "<p><strong>Recensioni del prodotto:</strong></p>";
                            echo "<ul>";
                            $reviews = $toyProduct->getReviews();
                            foreach ($reviews as $review) {
                                echo "<li>" . $review . "</li>";
                            }
                            echo "</ul>"; ?>
                            <h6 class="card-subtitle mb-2 text-muted"><strong>Prezzo</strong>: <?php echo $toyProduct->price ?>€</h6>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>