<?php

namespace AppBundle\Mode\Traits;

use AppBundle\Entity\Photo;
use Doctrine\Common\Collections\ArrayCollection;

trait PhotoTrait
{
    /**
     * @var ArrayCollection
     */
    protected $photos;

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
     * @param Photo $photo
     *
     * @return self
     */
    public function removePhoto(Photo $photo)
    {
        $this->photos->removeElement($photo);

        return $this;
    }
}