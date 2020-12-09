<?php

require __DIR__ . "/MySQL.php";

class Service {
    protected $connection;

    public function __construct() {
        $mysql = new MySQL();
        $this->connection = $mysql->connection;
    }
}
