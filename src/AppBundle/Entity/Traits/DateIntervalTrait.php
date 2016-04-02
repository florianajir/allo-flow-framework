<?php

namespace AppBundle\Entity\Traits;

use DateTime;

trait DateIntervalTrait
{
    /**
     * @var DateTime
     */
    protected $beginDate;

    /**
     * @var DateTime
     */
    protected $endDate;


    /**
     * @return DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param DateTime $beginDate
     *
     * @return self
     */
    public function setBeginDate(DateTime $beginDate)
    {
        $this->beginDate = $beginDate;
        
        return $this;
    }
    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        
        return $this;
    }
}