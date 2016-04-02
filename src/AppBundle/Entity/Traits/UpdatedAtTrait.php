<?php

namespace AppBundle\Entity\Traits;

use DateTime;

trait UpdatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * init updated at
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new DateTime();

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}