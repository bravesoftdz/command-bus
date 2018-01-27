<?php

require_once "vendor/autoload.php";

use Dykyi\Application;
use Dykyi\CommandBus\SimpleCommandBus;
use Symfony\Component\HttpFoundation\Request;

define('HOME_FOLDER', __DIR__);

$dotenv = new \Dotenv\Dotenv(HOME_FOLDER);
$dotenv->load();

$request = Request::createFromGlobals();

$app = new Application(new SimpleCommandBus());
$app->run($request);
