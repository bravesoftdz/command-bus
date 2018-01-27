<?php

namespace Dykyi\User;

use Dykyi\APIRepository;
use Dykyi\RepositoryInterface;

/**
 * Class UserRepository
 * @package Dykyi\User
 */
class UserRepository extends APIRepository implements RepositoryInterface
{
    public function getById($id)
    {
        // TODO: get user from API

        return new UserEntity();
    }

    public function save()
    {
        return [];
    }

}