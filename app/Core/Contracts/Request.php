<?php

interface RequestImp
{
    public function __construct();
    public function input($key, $default = null);
    public function param($key, $default = null);
}