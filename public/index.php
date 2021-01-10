<?php

/*
|--------------------------------------------------------------------------
| START THE SESSION
|--------------------------------------------------------------------------
|
| Start new or resume existing session. Since the session must exist on
| every first line of the code, the `session_start` method call is placed
| here.
|
*/

session_start();

/*
|--------------------------------------------------------------------------
| DEFINE BASE OF URL
|--------------------------------------------------------------------------
|
| This process will get the base url from the current URL and make it the
| value of the constant `BASE_URL`. Base URL is a URL whose path is only
| up to `/public`, while subsequent paths are not included. 
|
*/

$path = isset($_GET["path"]) ? $_GET["path"] : $_SERVER["PATH_INFO"];
$url = "http://" . $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];

define("BASE_URL", rtrim($url, $path));

/*
|--------------------------------------------------------------------------
| LOAD DOT ENV FILE
|--------------------------------------------------------------------------
|
| Get the values of all defined variables in the `.env` file. Then these
| variables are converted to PHP code. So that PHP can easily call these
| variables.
|
*/

require_once __DIR__ . "/../app/Core/Config/DotEnv.php";

$dotenv = new DotEnv(__DIR__ . "/../.env");
$dotenv->load();

/*
|--------------------------------------------------------------------------
| RUN THE APPLICATION
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's route. Then, we will send the response back to this
| client's browser, allowing them to enjoy our application.
*/

require_once __DIR__ . "/../app/Core/Application.php";
require_once __DIR__ . "/../app/routes.php";

$app = new Application();
$app->register($route);
$app->run();
