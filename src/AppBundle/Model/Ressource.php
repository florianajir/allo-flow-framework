<?php

namespace AppBundle\Model;

use AppBundle\Model\Traits\CreatedAtTrait;
use AppBundle\Model\Traits\DescriptionTrait;
use AppBundle\Model\Traits\LikeTrait;
use AppBundle\Model\Traits\NameTrait;
use AppBundle\Model\Traits\PhotoTrait;
use AppBundle\Model\Traits\TagTrait;
use AppBundle\Model\Traits\UpdatedAtTrait;
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
    use NameTrait;
    use DescriptionTrait;
    use LikeTrait;
    use TagTrait;
    use PhotoTrait;
    use CreatedAtTrait;
    use UpdatedAtTrait;

    public function __construct()
    {
        $this->initCreatedAt();
        $this->tags = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->photos = new ArrayCollection();
    }
}
