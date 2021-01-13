<?php

interface SessionImp
{
    public static function get($key, $default = null);
    public static function has($key);
    public static function put($key, $value = null);
    public static function remove($key);
    public static function getError();
    public static function setError($message);
    public static function getSuccess();
    public static function setSuccess($message);
}