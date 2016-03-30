<?php

namespace AppBundle\Entity;

use AppBundle\Model\Ressource;
use Doctrine\Common\Collections\ArrayCollection;

class Artist extends Ressource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var ArrayCollection|Product[]
     */
    private $collection;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        
        return $this;
    }

    /**
     * @return ArrayCollection|Product[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param ArrayCollection|Product[] $collection
     *
     * @return self
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        
        return $this;
    }
}