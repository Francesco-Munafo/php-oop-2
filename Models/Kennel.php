<?php

require_once __DIR__ . '/../Traits/Materials.php';
class Kennels extends Products
{
    private $type; //cuccia chiusa, cuscino ecc
    private $dimensions;
    use Materials;

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



    public function setType($type)
    {
        $this->type = $type;
    }

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getInfo()
    {
        return ('Dimen.' . $this->getDimensions() . '- Tipo' .  $this->getType() .  '- Materiali' . $this->getMaterial());
    }
}
