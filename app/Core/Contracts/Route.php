<?php

interface RouteImp
{
    public function __construct();
    public function get($path, $controller);
    public function post($path, $controller);
    public function authenticated();
    public function guest();
}
