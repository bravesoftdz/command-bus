<?php

namespace Dykyi\Request;

/**
 * Interface ApiRequestInterface
 * @package Dykyi\Request
 */
interface ApiRequestInterface extends RequestInterface
{
    /**]
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getType();
}