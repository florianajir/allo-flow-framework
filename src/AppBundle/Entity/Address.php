<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 */
class Address extends Ressource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $moderator;

    /**
     * @var City
     */
    private $city;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var Artist[]|ArrayCollection
     */
    private $artists;

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
     * @return User
     */
    public function getModerator()
    {
        return $this->moderator;
    }

    /**
     * @param User $moderator
     *
     * @return self
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;

        return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        
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
    public function addArtist(Artist $artist)
    {
        $this->artists->add($artist);

        return $this;
    }
    /**
     * @param Artist $artist
     *
     * @return self
     */
    public function removeArtist(Artist $artist)
    {
        $this->artists->removeElement($artist);

        return $this;
    }
}