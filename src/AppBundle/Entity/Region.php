<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Region extends Ressource
{
    /**
     * @var ArrayCollection|City[]
     */
    private $cities;

    /**
     * @return City[]|ArrayCollection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param City[]|ArrayCollection $cities
     *
     * @return self
     */
    public function setCities($cities)
    {
        $this->cities = $cities;

        return $this;
    }
}