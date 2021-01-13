<?php


interface DotEnvImp
{
    public function __construct(string $path);
    public function load();

}