<?php

namespace Dykyi\Command;

/**
 * Class CommandInterface
 * @package Dykyi\Command
 */
interface CommandInterface
{
    /**
     * @param $nextCommand
     * @return void
     */
    public function setSuccessor($nextCommand);

    /**
     * @return string
     */
    public function execute();

    /**
     * @return CommandInterface
     */
    public function getSuccessor();

    /**
     * @return bool
     */
    public function isTypeCorrect();
}