<?php

namespace Dykyi\User\Transformer;

use Dykyi\User\UserEntity;

/**
 * Class JsonUserDataTransformer
 * @package Dykyi\User
 */
class JsonUserDataTransformer implements UserDataTransformerInterface
{

    public function write(UserEntity $user)
    {
        // TODO: Implement write() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function execute(UserEntity $user)
    {
        return json_encode($user);
    }
}