<?php

namespace Dykyi\CommandBus;

use Dykyi\Command\CommandInterface;
use Dykyi\Exception\CommandException;
use Dykyi\Command\Exception\CommandHandlerNotFound;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SimpleCommandBus
 * @package Dykyi\CommandBus
 */
class SimpleCommandBus implements CommandBusInterface
{
    /**
     * @param $command
     * @return Response
     *
     * @throws CommandException
     */
    public function handle(CommandInterface $command)
    {
        if(!class_exists(get_class($command))){
            throw new CommandHandlerNotFound("Command handler not found");
        }

        $command->execute();
    }
}