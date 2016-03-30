<?php

namespace AppBundle\Mode\Traits;

use DateTime;

trait CreatedAtTrait
{
    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @param DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    /**
     * init created date
     */
    public function initCreatedAt()
    {
        $this->createdAt = new DateTime();
    }
}