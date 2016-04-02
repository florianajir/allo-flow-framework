<?php

namespace AppBundle\Entity\Traits;

use DateTime;

trait CreatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * init created date
     */
    public function setCreatedAt()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}