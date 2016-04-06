<?php

namespace AppBundle\Repository;

/**
 * PhotoRepository
 */
class PhotoRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function findLatests($limit = 10)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Photo p ORDER BY s.createdAt LIMIT :limit DESC'
            )
            ->setParameter('limit', $limit)
            ->getResult();
    }
}
