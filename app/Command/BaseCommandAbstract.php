<?php

namespace Dykyi\Command;

use Dykyi\Request\RequestInterface;

/**
 * Class BaseCommandAbstract
 * @package Dykyi\Command
 */
abstract class BaseCommandAbstract implements CommandInterface
{
    /** @var  CommandInterface */
    private $successor;

    /** @var RequestInterface */
    private $request;

    /**
     * RPCCommand constructor.
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function setSuccessor($nextCommand)
    {
        $this->successor = $nextCommand;
    }

    private function getType()
    {
        return strtolower(static::COMMAND_TYPE);
    }

    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return CommandInterface|null
     */
    public function getSuccessor()
    {
        if ($this->successor === null){
            return null;
        }

        return new $this->successor($this->getRequest());
    }

    public function isTypeCorrect()
    {
        return $this->getType() === $this->getRequest()->getType();
    }

    abstract public function execute();
}