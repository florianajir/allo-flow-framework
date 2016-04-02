<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Ressource;
use AppBundle\Entity\Traits\DateIntervalTrait;
use AppBundle\Entity\Traits\PriceTrait;

class Product extends Ressource
{
    use DateIntervalTrait;
    use PriceTrait;

    /**
     * @var Artist
     */
    private $artist;

    /**
     * @var int
     */
    private $stock;

    /**
     * @var \DateTime
     */
    private $creation;

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
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * @param \DateTime $creation
     *
     * @return self
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
        
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
    public function setStock($stock = 1)
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