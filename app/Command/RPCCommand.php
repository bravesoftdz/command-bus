<?php

namespace Dykyi\Command;

/**
 * Class RPCCommand
 * @package Dykyi\Command
 */
class RPCCommand extends BaseCommandAbstract
{
    const COMMAND_TYPE = 'rpc';

    public function execute()
    {
        return 'RPC Call';
    }
}