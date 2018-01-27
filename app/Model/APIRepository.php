<?php

namespace Dykyi\Model;

/**
 * Class APIRepository
 * @package Dykyi
 */
class APIRepository
{
    private $type;

    /**
     * APIRepository constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

}