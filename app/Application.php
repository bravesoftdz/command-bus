<?php

namespace Dykyi;

use Exception;
use Dykyi\Command\RESTCommand;
use Dykyi\Command\RPCCommand;
use Dykyi\CommandBus\CommandBusInterface;
use Dykyi\Request\ApiRequest;
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

        $apiRequest = new ApiRequest($type, $id);

        $rpc = new RPCCommand($apiRequest);
        $rpc->setSuccessor(RESTCommand::class);

        $responce = $this->bus->handle($rpc);
        $responce->send();
    }
}