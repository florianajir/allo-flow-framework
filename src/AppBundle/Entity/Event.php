<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Event: posted by a user
 * include relations to : address, artists, photos
 */
class Event extends Ressource
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
     * @var \DateTime
     */
    private $beginDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var ArrayCollection|Artist[]
     */
    private $artists;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var float
     */
    private $price;

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
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param \DateTime $beginDate
     *
     * @return self
     */
    public function setBeginDate(\DateTime $beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

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