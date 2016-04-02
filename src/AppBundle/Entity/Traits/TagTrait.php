<?php

namespace AppBundle\Entity\Traits;

use AppBundle\Entity\Artist;
use AppBundle\Entity\Event;
use AppBundle\Entity\Photo;
use AppBundle\Entity\Stream;
use AppBundle\Entity\Tag;
use Doctrine\Common\Collections\ArrayCollection;

trait TagTrait
{
    /**
     * @var ArrayCollection
     */
    protected $tags;

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
        } elseif ($this instanceof Event) {
            $tag->addEvent($this);
        } elseif ($this instanceof Artist) {
            $tag->addArtist($this);
        }
        $this->tags->add($tag);

        return $this;
    }

    /**
     * @param Tag $tag
     *
     * @return self
     */
    public function removeTag(Tag $tag)
    {
        $this->tags->removeElement($tag);

        return $this;
    }
}
