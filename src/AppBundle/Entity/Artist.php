<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Artist extends Ressource
{
    /**
     * @var string
     */
    private $activity;

    /**
     * @var User
     */
    private $user;

    /**
     * @var ArrayCollection|Product[]
     */
    private $collection;

    /**
     * @var Event[]|ArrayCollection
     */
    private $events;

    /**
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param string $activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        
        return $this;
    }

    /**
     * @return ArrayCollection|Product[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param ArrayCollection|Product[] $collection
     *
     * @return self
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        
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
