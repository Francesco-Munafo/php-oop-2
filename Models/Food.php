<?php

class Food extends Products
{

    private $expirationDate;
    private $type;
    private $weight;

    public function __construct(string $_name, float $_price, Category $_category, string $expirationDate, string $type, int $weight)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setExpirationDate($expirationDate);
        $this->setType($type); // carne, croccantini ecc.
        $this->setWeight($weight); //peso del contenuto
    }


    // Getters and Setters


    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getWeight()
    {
        return $this->weight;
    }


    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
