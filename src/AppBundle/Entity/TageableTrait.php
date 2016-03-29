<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

trait TageableTrait
{
    /**
     * @var ArrayCollection
     */
    private $tags;

    /**
     * @param ArrayCollection $tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag $tag
     *
     * @return self
     */
    public function addTag(Tag $tag)
    {
        if ($this instanceof Stream) {
            $tag->addStream($this); // synchronously updating inverse side
        } elseif ($this instanceof Photo) {
            $tag->addPhoto($this);
        }
        $this->tags[] = $tag;

        return $this;
    }

    public function removeTag(Tag $tag)
    {
        $this->tags->removeElement($tag);

        return $this;
    }

}