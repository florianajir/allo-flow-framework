<?php

namespace AppBundle\Mode\Traits;

use AppBundle\Entity\Like;
use Doctrine\Common\Collections\ArrayCollection;

trait LikeTrait
{
    /**
     * @var ArrayCollection
     */
    protected $likes;

    /**
     * @param ArrayCollection $likes
     *
     * @return self
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param Like $like
     *
     * @return self
     */
    public function addLike(Like $like)
    {
        $this->likes->add($like);

        return $this;
    }

    public function removeLike(Like $like)
    {
        $this->likes->removeElement($like);

        return $this;
    }
}