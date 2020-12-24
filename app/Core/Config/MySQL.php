<?php

require __DIR__ . "/../Core/DatabaseConfiguration.php";

class MySQL
{
    use DatabaseConfiguration;

    /**
     * MySQL connection.
     * 
     * @var object
     */
    public $connection = null;

    /**
     * Is database connected successfully or not.
     * 
     * @var boolean
     */
    public $status = false;

    /**
     * An error messege will appear if the database has an error.
     * 
     * @var string
     */
    public $errorMessage = null;

    /**
     * Constractor.
     */
    public function __construct()
    {
        $this->createConnection();
    }

    /**
     * Create database connection.
     * 
     * @return void
     */
    private function createConnection()
    {
        $this->connection = new mysqli($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DBNAME, $this->PORT);
        $this->checkConnection();
    }

    /**
     * Check if the MySQL connection has encountered an error.
     * 
     * @return void
     */
    private function checkConnection()
    {
        if ($this->connection->connect_error) {
            $this->status = false;
            $this->errorMessage = $this->connection->connect_error;
        } else {
            $this->status = true;
        }
    }

    /**
     * Close connection.
     * 
     * @return void
     */
    public function close()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}