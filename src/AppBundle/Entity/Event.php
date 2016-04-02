<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Ressource;
use AppBundle\Entity\Traits\DateIntervalTrait;
use AppBundle\Entity\Traits\PriceTrait;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Event: posted by a user
 * include relations to : address, artists, photos
 */
class Event extends Ressource
{
    use DateIntervalTrait;
    use PriceTrait;

    /**
     * @var User
     */
    private $owner;

    /**
     * @var ArrayCollection|Artist[]
     */
    private $artists;

    /**
     * @var Address
     */
    private $address;

    /**
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

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
     * @param Artist[]|ArrayCollection $artists
     *
     * @return self
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;

        return $this;
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
    public function removedArtist(Artist $artist)
    {
        $this->artists->removeElement($artist);

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Indicate if the event is pending (between date range)
     *
     * @return bool
     */
    public function isPending()
    {
        $now = new \DateTime('now');

        return $this->beginDate <= $now && $now < $this->endDate;
    }
}