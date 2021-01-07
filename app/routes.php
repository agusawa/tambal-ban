<?php

require_once __DIR__ . "/Core/Route.php";

$route = new Route();

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the `/public/index.php` file.
|
*/

$route->get("/", "HomeController@index");

$route->get("/signup", "AuthController@signUp");
$route->post("/signup", "AuthController@signUpProcess");
$route->get("/login", "AuthController@login");
$route->post("/login", "AuthController@loginProcess");
$route->get("/find", "HomeController@find");
