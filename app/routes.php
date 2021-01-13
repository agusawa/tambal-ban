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

$route->get("/", "HomeController@index")->guest();
$route->get("/find", "HomeController@find")->guest();

$route->get("/signup", "AuthController@signUp")->guest();
$route->post("/signup", "AuthController@signUpProcess")->guest();
$route->get("/login", "AuthController@login")->guest();
$route->post("/login", "AuthController@loginProcess")->guest();
$route->get("/logout", "AuthController@logout");

$route->get("/tire-patches/edit", "TirePatchController@edit")->authenticated();
$route->post("/tire-patches/edit", "TirePatchController@editProcess")->authenticated();

$route->get("/account/change-password", "AccountController@changePassword")->authenticated();
$route->post("/account/change-password", "AccountController@changePasswordProcess")->authenticated();
