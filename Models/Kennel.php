<?php

class Kennels extends Products
{
    private $type; //cuccia chiusa, cuscino ecc
    private $dimensions;
    private $material;

    public function __construct(string $_name, float $_price, Category $_category, string $_type, string $_dimensions, string $_material)
    {
        parent::__construct($_name, $_price, $_category);

        $this->setType($_type);
        $this->setDimensions($_dimensions);
        $this->setMaterial($_material);
    }

    // Getters and Setters

    public function getType()
    {
        return $this->type;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function getMaterial()
    {
        return $this->material;
    }


    public function setType($type)
    {
        $this->type = $type;
    }

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
