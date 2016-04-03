<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Tag;
use AppBundle\Repository\TagRepository;
use Doctrine\ORM\EntityManager;

class TagManager extends BaseManager
{
    /**
     * TagManager constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param Tag $tag
     */
    public function create(Tag $tag)
    {
        $this->persistAndFlush($tag);
    }

    /**
     * @param string $name
     *
     * @return Tag|null
     */
    public function loadTag($name)
    {
        return $this->getRepository()->findOneByName($name);
    }

    /**
     * @return TagRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository('AppBundle:Tag');
    }
}
