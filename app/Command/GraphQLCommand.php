<?php

namespace Dykyi\Command;

/**
 * Class RPCCommand
 * @package Dykyi\Command
 */
class GraphQLCommand extends BaseCommandAbstract
{
    const COMMAND_TYPE = 'GraphQL';

    public function execute()
    {
        return 'GraphQL Call';
    }
}