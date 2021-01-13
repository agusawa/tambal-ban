<?php

interface HashImp
{
    public static function make($password);
    public static function check($password, $passwordHash);
}
