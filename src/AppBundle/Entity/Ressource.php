<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\CreatedAtTrait;
use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\LikeTrait;
use AppBundle\Entity\Traits\NameTrait;
use AppBundle\Entity\Traits\PhotoTrait;
use AppBundle\Entity\Traits\TagTrait;
use AppBundle\Entity\Traits\UpdatedAtTrait;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Extends all ressources that could be liked, tagged or illustrated by photo :
 *   + Address
 *   + Artist
 *   + City
 *   + Event
 *   + Product
 *   + Stream
 */
abstract class Ressource
{
    use IdTrait;
    use NameTrait;
    use DescriptionTrait;
    use LikeTrait;
    use TagTrait;
    use PhotoTrait;
    use CreatedAtTrait;
    use UpdatedAtTrait;

    /**
     * Initialize ressource properties (collections and lifecycle dates)
     */
    public function __construct()
    {
        $this->setCreatedAt();
        $this->setUpdatedAt();
        $this->tags = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->photos = new ArrayCollection();
    }
}
