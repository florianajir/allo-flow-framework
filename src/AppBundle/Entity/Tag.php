<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tag
 */
class Tag
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var ArrayCollection
     */
    private $streams;

    /**
     * @var ArrayCollection
     */
    private $photos;

    public function __construct()
    {
        $this->streams = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return ArrayCollection
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * @param ArrayCollection $streams
     *
     * @return self
     */
    public function setStreams($streams)
    {
        $this->streams = $streams;

        return $this;
    }

    /**
     * @param Stream $stream
     *
     * @return self
     */
    public function addStream(Stream $stream)
    {
        $this->streams[] = $stream;

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
     * @param ArrayCollection $photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * @param Photo $photo
     *
     * @return self
     */
    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }
}

