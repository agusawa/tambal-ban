<?php

class Request
{
    /**
     * Accomodate data on the querystring.
     * 
     * @var array
     * 
     */
    private $params;

    /**
     * Accomodate data on the form when submitted.
     * 
     * @var array
     * 
     */
    private $inputs;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->params = $_GET;
        $this->inputs = $_POST;
    }
    
    /**
     * Get input value by key.
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     * 
     */
    public function input($key, $default = null)
    {
        if (array_key_exists($key, $this->inputs)) {
            return $this->inputs[$key];
        } else {
            return $default;
        }
    }
    
    /**
     * Get querystring value by key.
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     * 
     */
    public function param($key, $default = null)
    {
        if (array_key_exists($key, $this->params)) {
            return $this->params[$key];
        } else {
            return $default;
        }
    }
}
