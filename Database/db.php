<?php


$products = [];

array_push(
    $products,
    new Food('Croccantini', 79.99, new Category('Cane'), '2024-10-20', 'Cibo secco', '12kg'),
    new Food('Bocconcini in scatola', 0.89, new Category('Cane'), '2024-10-20', 'Cibo umido', '200gr'),
    new Kennels('Cuccia chiusa', 104.99, new Category('Cane'), 'Chiusa', '50x30x50', 'Resina'),
    new Toys('Palla da tennis', 6.95, new Category('Cane'), 'Stoffa'),
    new Food('Osso', 12.99, new Category('Cane'), '2024-10-20', 'Cibo umido', '2kg'),

    new Food('Croccantini', 24.99, new Category('Gatto'), '2024-10-20', 'Cibo secco', '3kg'),
    new Food('Bocconcini in scatola', 0.99, new Category('Gatto'), '2024-10-20', 'Cibo umido', '200gr'),
    new Kennels('Castello tiragraffi', 154.99, new Category('Gatto'), 'Chiusa', 'Modulare', 'Stoffa'),
    new Toys('Topolino meccanico', 10.59, new Category('Gatto'), 'Stoffa - Plastica'),
    new Toys('Bastone piumato', 7.99, new Category('Gatto'), 'Stoffa - Plastica'),
);
