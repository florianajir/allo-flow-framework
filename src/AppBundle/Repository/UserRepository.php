<?php

namespace AppBundle\Repository;

/**
 * StreamRepository
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findLatests()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM AppBundle:User u ORDER BY u.lastLogin DESC'
            )
            ->getResult();
    }
}
