<?php
class Product
{
    private $name;
    private $price;
    private $image;
    private $date_added;

    public function __construct($name, $price, $image, $date_added)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->date_added = $date_added;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDateAdded()
    {
        return $this->date_added;
    }

    public function setDateAdded($date_added)
    {
        $this->date_added = $date_added;
    }
}
