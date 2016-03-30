<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 */
class City extends Ressource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Region
     */
    private $region;

    /**
     * @var ArrayCollection|Artist[]
     */
    private $artists;

    /**
     * @var Event[]|ArrayCollection
     */
    private $events;

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
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region $region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        
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
     * @return Event[]|ArrayCollection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event $event
     *
     * @return self
     */
    public function addEvent(Event $event)
    {
        $this->events->add($event);

        return $this;
    }

    /**
     * @param Event $event
     *
     * @return self
     */
    public function removeEvent(Event $event)
    {
        $this->events->removeElement($event);

        return $this;
    }
}
