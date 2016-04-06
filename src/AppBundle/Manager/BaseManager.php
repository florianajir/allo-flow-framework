<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;

/**
 * Class BaseManager, for inheritance to others managers
 *
 * @author Florian Ajir <florianajir@gmail.com>
 */
abstract class BaseManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param object $entity
     */
    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
}
