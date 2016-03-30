<?php

namespace AppBundle\Entity;
use AppBundle\Mode\Traits\CreatedAtTrait;
use AppBundle\Mode\Traits\LikeTrait;
use AppBundle\Mode\Traits\NameTrait;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tag
 */
class Tag
{
    use CreatedAtTrait;
    use NameTrait;
    use LikeTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var Stream[]|ArrayCollection
     */
    private $streams;

    /**
     * @var Photo[]|ArrayCollection
     */
    private $photos;

    /**
     * @var Event[]|ArrayCollection
     */
    private $events;

    /**
     * @var Artist[]|ArrayCollection
     */
    private $artists;

    public function __construct()
    {
        $this->streams = new ArrayCollection();
        $this->photos = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->artists = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
     */
    public function getStreams()
    {
        return $this->streams;
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
     * @return ArrayCollection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Photo $photo
     *
     * @return self
     */
    public function addPhoto(Photo $photo)
    {
        $this->photos->add($photo);

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
