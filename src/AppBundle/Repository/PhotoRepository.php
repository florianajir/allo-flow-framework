<?php

namespace AppBundle\Repository;

/**
 * PhotoRepository
 */
class PhotoRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findLatests()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Photo p ORDER BY s.createdAt DESC'
            )
            ->getResult();
    }
}
