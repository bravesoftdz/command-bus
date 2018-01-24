<?php

namespace Dykyi\CommandBus;

use Dykyi\Command\CommandInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CommandBus
 * @package Dykyi\CommandBus
 */
class SimpleCommandBus implements CommandBusInterface
{
    /**
     * @param CommandInterface $command
     * @return Response
     *
     * @throws \Exception
     */
    public function handle(CommandInterface $command)
    {
        return new Response($command->execute());
    }
}