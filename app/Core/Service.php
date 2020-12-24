<?php

require __DIR__ . "/../Core/MySQL.php";

class Service
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
            self::createConnection();
        }

        return self::$connection;
    }

    /**
     * Create connection.
     *
     * @return void
     */
    private static function createConnection()
    {
        $mysql = new MySQL();
        self::$connection = $mysql->connection;
    }

    /**
     * Close MySQL connection.
     *
     * @return void
     */
    protected static function closeConnection()
    {
        self::getConnection()->close();
    }
}
