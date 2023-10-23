<?php

require_once __DIR__ . '/../Traits/Materials.php';
class Toys extends Products
{
    use Materials;

    public function __construct(string $_name, float $_price, Category $_category, string $material)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setMaterial($material);
    }
}
