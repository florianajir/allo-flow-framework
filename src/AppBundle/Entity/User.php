<?php

namespace AppBundle\Entity;

use AppBundle\Mode\Traits\LikeTrait;
use AppBundle\Mode\Traits\PhotoTrait;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 *
 */
class User extends BaseUser
{
    use LikeTrait;
    use PhotoTrait;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var City
     */
    protected $city;

    /**
     * @var ArrayCollection
     */
    protected $streams;

    /**
     * @var Event[]|ArrayCollection
     */
    protected $events;

    /**
     * @var User[]|ArrayCollection
     */
    protected $subscribers;

    /**
     * @var User[]|ArrayCollection
     */
    protected $favorites;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->streams = new ArrayCollection();
        $this->photos = new ArrayCollection();
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
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param Stream $stream
     *
     * @return self
     */
    public function addStream(Stream $stream)
    {
        $this->streams->add($stream);

        return $this;
    }

    /**
     * @param Stream $stream
     *
     * @return self
     */
    public function removeStream(Stream $stream)
    {
        $this->streams->removeElement($stream);

        return $this;
    }

    /**
     * @param User $subscriber
     *
     * @return self
     */
    public function addSubscriber(User $subscriber)
    {
        $this->subscribers->add($subscriber);

        return $this;
    }

    /**
     * @param User $user
     *
     * @return self
     */
    public function addFavorite(User $user)
    {
        $user->addSubscriber($this);
        $this->favorites->add($user);

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