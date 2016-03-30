<?php

namespace AppBundle\Mode\Traits;

use DateTime;

trait UpdatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @param DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * refresh updated date
     */
    public function refreshUpdatedAt()
    {
        $this->updatedAt = new DateTime('now');
    }
}