<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Kennel.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Database/db.php';

/*

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende -prodotti- per animali.

I prodotti sono categorizzati, le -categorie- sono Cani o Gatti.

I prodotti saranno oltre al -cibo-, anche -giochi-, -cucce-, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):

organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.

*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <?php include __DIR__ . '/Partials/head.php' ?>

    <main>

        <?php include __DIR__ . '/Partials/main.php' ?>



    </main>

    <?php include __DIR__ . '/Partials/foot.php' ?>

</body>

</html>