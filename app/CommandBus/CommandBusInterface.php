<?php

namespace Dykyi\CommandBus;

use Dykyi\Command\CommandInterface;

/**
 * Class CommandBusInterface
 * @package Dykyi\CommandBus
 */
interface CommandBusInterface
{
    /**
     * @param CommandInterface $command
     * @return mixed
     */
    public function handle(CommandInterface $command);
}