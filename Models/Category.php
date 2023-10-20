<?php

class Category
{
    private $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    // Getters and Setters

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
