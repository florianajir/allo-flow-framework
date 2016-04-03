<?php

namespace AppBundle\Manager;

/**
 * Class BaseManager
 */
abstract class BaseManager
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @param object $entity
     */
    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
}
