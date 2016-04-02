<?php

namespace AppBundle\Entity\Traits;

trait NameTrait
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param String $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }
}