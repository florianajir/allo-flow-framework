<?php

namespace AppBundle\Repository;

/**
 * StreamRepository
 */
class StreamRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findLatests()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Stream s ORDER BY s.publishedAt DESC'
            )
            ->getResult();
    }
}
