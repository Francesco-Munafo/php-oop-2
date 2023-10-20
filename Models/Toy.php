<?php

class Toys extends Products
{
    private $material;

    public function __construct(string $_name, float $_price, Category $_category, string $_material)
    {
        parent::__construct($_name, $_price, $_category);
        $this->material = $_material;
    }

    // Getters and Setters

    public function getMaterial()
    {
        return $this->material;
    }


    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
