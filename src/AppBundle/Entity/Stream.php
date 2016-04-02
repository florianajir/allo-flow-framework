<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Ressource;

/**
 * Stream model
 */
class Stream extends Ressource
{
    /**
     * @var \DateTime
     */
    private $expiration;

    /**
     * @var User
     */
    private $user;

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param \DateTime $expiration
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

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
}
