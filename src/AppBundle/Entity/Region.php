<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

class Region extends Ressource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ArrayCollection|City[]
     */
    private $cities;

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