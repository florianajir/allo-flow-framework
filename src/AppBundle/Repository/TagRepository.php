<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Tag;

/**
 * TagRepository
 */
class TagRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $tagName
     *
     * @return Tag|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneByName($tagName)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT t FROM AppBundle:Tag t WHERE t.name = :name'
            )
            ->setParameter('name', $tagName);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
