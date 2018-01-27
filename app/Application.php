<?php

namespace Dykyi;

use Exception;
use Dykyi\Command\GetAdminCommand;
use Dykyi\Command\GetUserCommand;
use Dykyi\CommandBus\CommandBusInterface;
use Dykyi\User\UserRequest;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Application
 * @package Dykyi
 */
class Application
{
    /**
     * @var CommandBusInterface
     */
    private $bus;

    /**
     * Application constructor.
     * @param CommandBusInterface $bus
     */
    public function __construct(CommandBusInterface $bus)
    {
        $this->bus = $bus;
    }

    /**
     * Application constructor.
     * @param Request $request
     *
     * @throws Exception
    */
    public function run(Request $request)
    {
        $type = $request->get('type');
        $id   = $request->get('id');

        $userRequest    = new UserRequest($type, $id);

        $getUserCommand = new GetUserCommand($userRequest);
        $getUserCommand->setSuccessor(new GetAdminCommand($userRequest));

        $this->bus->handle($getUserCommand);
    }
}