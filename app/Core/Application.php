<?php

require_once __DIR__ . "/Config/MySQL.php";

class Application
{
    /**
     * The service will be called when the application is run. The registered
     * class must implement the `Bootable` interface.
     *
     * @var array
     */
    private $services = [];

    /**
     * Register the service.
     *
     * @param object $object
     * @return void
     */
    public function register($object)
    {
        array_push($this->services, $object);
    }

    /**
     * Setting up and run the application.
     *
     * @return void
     */
    public function run()
    {
        MySQL::createConnection();

        if (MySQL::hasError()) {
            echo "MySQL Error : " . MySQL::getError();
            die();
        }

        foreach ($this->services as $service) {
            $service->boot();
        }

        MySQL::closeConnection();
    }
}
