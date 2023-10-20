<?php

class Products
{
    private $name;
    private $price;
    private $category;
    private $image;

    public function __construct(string $_name, float $_price, Category $_category)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
        $this->setImage("https://picsum.photos/600/400?random");
    }

    // Getters and Setters

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
}
