<?php

namespace Dykyi\CommandBus;

use Exception;
use Dykyi\Command\CommandInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ChainCommandBus
 * @package Dykyi\CommandBus
 */
class ChainCommandBus implements CommandBusInterface
{
    /**
     * @param CommandInterface $command
     * @return Response
     *
     * @throws Exception
     */
    public function handle(CommandInterface $command)
    {
        $result = '';
        if ($command->isTypeCorrect()) {
            $result = $command->execute();
        } elseif ($command->getSuccessor() !== null) {
            $result = $command->getSuccessor()->execute();
        }

        return new Response($result);
    }
}