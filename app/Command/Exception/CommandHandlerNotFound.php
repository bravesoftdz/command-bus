<?php

namespace Dykyi\Command\Exception;

use InvalidArgumentException;

/**
 * Class CommandNotFound
 */
class CommandHandlerNotFound extends InvalidArgumentException  implements CommandException
{

}