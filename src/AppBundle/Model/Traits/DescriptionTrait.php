<?php

namespace AppBundle\Model\Traits;

trait DescriptionTrait
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @param String $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->description;
    }
}