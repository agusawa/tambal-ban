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
$route->get("/find", "HomeController@find");
$route->get("/signup", "AuthController@signUp")->guest();
$route->post("/signup", "AuthController@signUpProcess")->guest();
$route->get("/login", "AuthController@login")->guest();
$route->post("/login", "AuthController@loginProcess")->guest();
$route->get("/logout", "AuthController@logout");
$route->get("/tire-patches/add", "TirePatchController@add")->authenticated();
$route->post("/tire-patches/add", "TirePatchController@addProcess")->authenticated();
$route->get("/account/edit", "AccountController@edit")->authenticated();
$route->post("/account/edit", "AccountControler@editProcess")->authenticated();