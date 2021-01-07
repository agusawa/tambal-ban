<?php

class MySQL
{
    /**
     * MySQL connection.
     * 
     * @var object
     */
    private static $connection = null;

    /**
     * An error messege will appear if the database has an error.
     * 
     * @var string
     */
    private static $errorMessage = null;

    /**
     * Create database connection.
     * 
     * @return void
     */
    public static function createConnection()
    {
        self::$connection = new mysqli(
            getenv("MYSQL_HOSTNAME"),
            getenv("MYSQL_USERNAME"),
            getenv("MYSQL_PASSWORD"),
            getenv("MYSQL_DBNAME"),
            getenv("MYSQL_PORT")
        );
        self::checkConnection();
    }

    /**
     * Check if the MySQL connection has encountered an error.
     * 
     * @return void
     */
    private static function checkConnection()
    {
        if (self::$connection->connect_error) {
            self::$errorMessage = self::$connection->connect_error;
        }
    }

    public static function hasError()
    {
        return self::$errorMessage !== null;
    }

    public static function getError()
    {
        return self::$errorMessage;
    }

    /**
     * Close connection.
     * 
     * @return void
     */
    public static function closeConnection()
    {
        if (self::$connection) {
            self::$connection->close();
        }
    }

    public static function getConnection()
    {
        return self::$connection;
    }
}
