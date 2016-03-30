<?php

namespace AppBundle\Model;

use AppBundle\Mode\Traits\DescriptionTrait;
use AppBundle\Mode\Traits\LikeTrait;
use AppBundle\Mode\Traits\NameTrait;
use AppBundle\Mode\Traits\PhotoTrait;
use AppBundle\Mode\Traits\TagTrait;
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

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->photos = new ArrayCollection();
    }
}
