<?php

interface MySQLImp
{
    public static function createConnection();
    public static function hasError();
    public static function getError();
    public static function closeConnection();
    public static function getConnection();
}