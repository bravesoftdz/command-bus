<?php

namespace Dykyi\Request;

/**
 * Class ApiRequest
 * @package Dykyi\Request
 */
class ApiRequest implements ApiRequestInterface
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