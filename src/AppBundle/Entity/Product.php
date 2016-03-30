<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;

class Product extends Ressource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Artist
     */
    private $artist;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $stock;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param Artist $artist
     *
     * @return self
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTime $birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @param int $quantity
     */
    public function increaseStock($quantity = 1)
    {
        $this->stock += $quantity;
    }

    /**
     * @param int $quantity
     */
    public function decreaseStock($quantity = 1)
    {
        $this->stock -= $quantity;
    }
}