<?php

class Request {
    private $params;
    private $inputs;

    public function __construct() {
        $this->params = $_GET;
        $this->inputs = $_POST;
    }

    public function input($key) {
        if (array_key_exists($key, $this->inputs)) {
            return $this->inputs[$key];
        } else {
            return null;
        }
    }

    public function param($key) {
        if (array_key_exists($key, $this->params)) {
            return $this->params[$key];
        } else {
            return null;
        }
    }
}
