<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\CreatedAtTrait;
use AppBundle\Entity\Traits\IdTrait;

class Like
{
    use CreatedAtTrait;
    use IdTrait;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Ressource
     */
    private $ressource;

    public function __construct()
    {
        $this->setCreatedAt();
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
