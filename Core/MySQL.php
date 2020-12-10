<?php

require __DIR__ . "/DatabaseConfiguration.php";

class MySQL
{
    use DatabaseConfiguration;

    public $connection = null;

    public $status = false;
    public $errorMessage = null;

    public function __construct()
    {
        $this->createConnection();
    }

    private function createConnection()
    {
        $this->connection = new mysqli($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DBNAME, $this->PORT);
        $this->checkConnection();
    }

    private function checkConnection()
    {
        if ($this->connection->connect_error) {
            $this->status = false;
            $this->errorMessage = $this->connection->connect_error;
        } else {
            $this->status = true;
        }
    }

    public function close()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}