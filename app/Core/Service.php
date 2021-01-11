<?php

require_once __DIR__ . "/Config/MySQL.php";
require_once __DIR__ . "/Contracts/Service.php";

abstract class Service implements ServiceImp
{
    /**
     * MySQL connection.
     *
     * @var object
     */
    private static $connection;

    /**
     * Get MySQL connection.
     *
     * @return object
     */
    protected static function getConnection()
    {
        if (!self::$connection) {
            self::$connection = MySQL::getConnection();
        }

        return self::$connection;
    }
}
