<?php

namespace Dykyi\User\Transformer;

use Dykyi\User\UserEntity;

/**
 * Interface UserDataTransformerInterface
 * @package Dykyi\User
 */
interface UserDataTransformerInterface
{
    public function read();

    public function write(UserEntity $user);

    public function execute(UserEntity $user);
}