<?php

namespace Dykyi\User;

use Dykyi\Model\APIRepository;
use Dykyi\Model\RepositoryInterface;

/**
 * Class UserRepository
 * @package Dykyi\User
 */
class AdminRepository extends APIRepository implements RepositoryInterface
{
    public function getById($id)
    {
        return new UserEntity();
    }

    public function save()
    {
        return [];
    }

}