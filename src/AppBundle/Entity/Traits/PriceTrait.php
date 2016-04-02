<?php

namespace AppBundle\Entity\Traits;

trait PriceTrait
{
    /**
     * @var float
     */
    private $price;

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
}