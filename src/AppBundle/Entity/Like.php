<?php

namespace AppBundle\Entity;

use AppBundle\Mode\Traits\CreatedAtTrait;
use AppBundle\Model\Ressource;

class Like
{
    use CreatedAtTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Ressource
     */
    private $ressource;

    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

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
     * @return Ressource
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * @param Ressource $ressource
     *
     * @return self
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }
}
