<?php

require __DIR__ . "/Request.php";

abstract class View {
    protected $method;
    protected $request;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->request = new Request();

        $this->handle();
    }

    private function handle() {
        switch ($this->method) {
            case "POST":
                $this->post();
                break;
            default:
                $this->get();
                break;
        }
    }

    protected function get() {
        // Should return 404 error.
    }

    protected function post() {
        // Should return 404 error.
    }

    protected function redirect($location) {
        header("Location: $location");
    }

    protected function render($file, $extra = []) {
        foreach ($extra as $key => $value) {
            ${$key} = $value;
        }

        require __DIR__ . "/../Templates/$file";
    }
}
