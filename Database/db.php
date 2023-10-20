<?php


$products = [];

array_push(
    $products,
    new Food('Croccantini', 79.90, new Category('Cane'), '2024-10-20', 'Cibo secco', 12),
    new Kennels('Cuccia chiusa', 104.99, new Category('Cane'), 'Chiusa', '50x30x50', 'Resina'),
    new Toys('Palla da tennis', 6.95, new Category('Cane'), 'Stoffa')
);
