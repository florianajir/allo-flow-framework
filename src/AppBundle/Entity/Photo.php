<?php

namespace AppBundle\Entity;

use AppBundle\Model\Traits\CreatedAtTrait;
use AppBundle\Model\Traits\DescriptionTrait;
use AppBundle\Model\Traits\LikeTrait;
use AppBundle\Model\Traits\NameTrait;
use AppBundle\Model\Traits\TagTrait;
use AppBundle\Model\Traits\UpdatedAtTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Photo: file uploaded by user
 */
class Photo
{
    use CreatedAtTrait;
    use DescriptionTrait;
    use LikeTrait;
    use NameTrait;
    use TagTrait;
    use UpdatedAtTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     */
    private $imageName;

    /**
     * @var Artist[]|ArrayCollection
     */
    private $artists;

    public function __construct()
    {
        $this->likes = new ArrayCollection();
        $this->tags = new ArrayCollection();
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return self
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        /*
        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
        */
        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return self
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
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
     * @return Artist[]|ArrayCollection
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param Artist[]|ArrayCollection $artists
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
    }
}
