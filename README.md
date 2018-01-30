# command bus realization
Service of get user by ID with implement hexagonal architecture.

## Install
+ composer install && composer dumpautoload -o

## Usage
```php
require_once "vendor/autoload.php";

define('HOME_FOLDER', __DIR__);

$dotenv = new \Dotenv\Dotenv(HOME_FOLDER);
$dotenv->load();

$request = Request::createFromGlobals();
$app = new Application(new SimpleCommandBus());
$app->run($request);
```

## Author
[Dykyi Roman](https://www.linkedin.com/in/roman-dykyi-43428543/), e-mail: [mr.dukuy@gmail.com](mailto:mr.dukuy@gmail.com)

