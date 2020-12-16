<?php

require __DIR__ . "/MySQL.php";

class Service
{
    protected static $connection;

    public function __construct()
    {
        $mysql = new MySQL();
        Service::$connection = $mysql->connection;
    }
}
