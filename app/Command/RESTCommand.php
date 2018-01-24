<?php

namespace Dykyi\Command;

/**
 * Class RPCCommand
 * @package Dykyi\Command
 */
class RESTCommand extends BaseCommandAbstract
{
    const COMMAND_TYPE = 'rest';

    public function execute()
    {
        return 'REST Call';
    }

}