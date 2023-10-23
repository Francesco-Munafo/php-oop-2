<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Kennel.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Database/db.php';

?>


<?php include __DIR__ . '/head.php' ?>

<?php include __DIR__ . '/main.php' ?>

<?php include __DIR__ . '/foot.php' ?>
