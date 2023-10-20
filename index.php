<?php 

/*

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende -prodotti- per animali.

I prodotti sono categorizzati, le -categorie- sono Cani o Gatti.

I prodotti saranno oltre al -cibo-, anche -giochi-, -cucce-, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):

organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.

*/

class Prodotti
{
public $name;
public $discount = 0;

public function __construct($_name, $_discount)
{
    $this->name = $_name;
    $this->discount = $_discount;
}

}

class Food extends Prodotti
{

    public $expirationDate;
    public $type;
    public $weight;

    public function __construct($_name, $_discount, $expirationDate, $type, $weight)
    {
        parent::__construct($_name, $_discount);
        $this->expirationDate = $expirationDate;
        $this->type = $type; // carne, croccantini ecc.
        $this->weight = $weight; //peso del contenuto
}

}

class Toys extends Prodotti
{
    public $material;

    public function __construct($_name, $_discount, $_material)
    {
        parent::__construct($_name, $_discount);
        $this->material = $_material;
    }
}

class Kennels extends Prodotti
{
public $type; //cuccia chiusa, cuscino ecc
public $height;
public $depth;
public $width;
public $material;
}

