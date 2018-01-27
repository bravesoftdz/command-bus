<?php

namespace Dykyi\Command;

use Dykyi\User\AdminRepository;
use Dykyi\User\UserRequest;
use Dykyi\User\UserService;
use Dykyi\User\Transformer\JsonUserDataTransformer;

/**
 * Class GetAdminCommand
 * @package Dykyi\Command
 */
class GetAdminCommand implements CommandInterface
{
    /** @var  CommandInterface */
    private $successor;

    private $request;

    /**
     * GetUserCommand constructor.
     * @param UserRequest $request
     */
    public function __construct(UserRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @param CommandInterface $nextService
     */
    public function setSuccessor(CommandInterface $nextService)
    {
        $this->successor = $nextService;
    }

    public function execute()
    {
        if ($this->request->getType() === 'admin') {
            $repository = new AdminRepository($this->request->getType());
            $transformer = new JsonUserDataTransformer();
            $service = new UserService($repository, $transformer);

            $response = $service->execute($this->request);
            $response->send();
        } else if ($this->successor != null)
        {
            $this->successor->execute();
        }
    }
}