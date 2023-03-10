<?php

namespace App\Service;

class Tacos{
    private $id;
    private $title;
    private $description;
    private $image;
    private $price;


    public function __construct($id, $title, $description, $image, $price) {

        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
    }



    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getTitle():string
    {
        return $this->title;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription(): ? string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription( ? string $description)
    {
        $this->description = $description;

        return $this;
    }


    public function getImage():? string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage( ? string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(): ? float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice( ? float $price)
    {
        $this->price = $price;

        return $this;
    }


}





