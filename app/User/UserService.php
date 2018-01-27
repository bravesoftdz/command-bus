<?php

namespace Dykyi\User;

use Dykyi\RepositoryInterface;
use Dykyi\User\Transformer\UserDataTransformerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserService
 */
class UserService
{
    private $userRepository;

    private $userDataTransformer;

    public function __construct(
        RepositoryInterface $userRepository,
        UserDataTransformerInterface $userDataTransformer)
    {
        $this->userRepository = $userRepository;
        $this->userDataTransformer = $userDataTransformer;
    }

    /**
     * @param UserRequest $request
     * @return Response
     *
     * @throws UserNotFoundException
     */
    public function execute(UserRequest $request)
    {
        $id = $request->getId();

        $user = $this->userRepository->getById($id);
        if (!$user) {
            throw new UserNotFoundException();
        }

        return new Response($this->userDataTransformer->execute($user));
    }

    public function userDataTransformer()
    {
        return $this->userDataTransformer;
    }
}