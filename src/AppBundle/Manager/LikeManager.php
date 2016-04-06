<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Like;

/**
 * @author Florian Ajir <florianajir@gmail.com>
 */
class LikeManager extends BaseManager
{
    /**
     * @param Like $like
     */
    public function create(Like $like)
    {
        $this->persistAndFlush($like);
    }
}
