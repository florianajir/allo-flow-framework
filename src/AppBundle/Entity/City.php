<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 */
class City extends Ressource
{
    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $country;

    /**
     * @var ArrayCollection|Artist[]
     */
    private $artists;

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Artist[]|ArrayCollection
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param Artist $artist
     *
     * @return self
     */
    public function addArtist($artist)
    {
        $this->artists->add($artist);
        
        return $this;
    }

    /**
     * @param Artist $artist
     *
     * @return self
     */
    public function removeArtist($artist)
    {
        $this->artists->removeElement($artist);

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
