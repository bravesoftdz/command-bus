<?php

require_once "vendor/autoload.php";

define('HOME_FOLDER', __DIR__);

$dotenv = new \Dotenv\Dotenv(HOME_FOLDER);
$dotenv->load();

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app = new \Dykyi\Application(new \Dykyi\CommandBus\ChainCommandBus());
$app->run($request);
