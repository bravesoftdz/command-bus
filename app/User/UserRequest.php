<?php

namespace Dykyi\User;

/**
 * Class UserRequest
 * @package Dykyi\Request
 */
class UserRequest
{
    /** @var string */
    private $type;

    /** @var int */
    private $id;

    /**
     * ApiRequest constructor.
     * @param $type
     * @param $id
     */
    public function __construct($type, $id)
    {
        $this->id   = $id;
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getId()
    {
        return $this->id;
    }
}