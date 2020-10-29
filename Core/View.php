<?php

abstract class View {
    protected $method;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
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
