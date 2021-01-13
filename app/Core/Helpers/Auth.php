<?php

require_once __DIR__ . "/Session.php";
require_once __DIR__ . "/../Contracts/Auth.php";
require_once __DIR__ . "/../../Services/UserService.php";

class Auth implements AuthImp
{
    /**
     * Holds current user data. So as not to perform continuous queries.
     *
     * @var User
     */
    private static $user;

    /**
     * Determine if the current user is authenticated.
     *
     * @return boolean
     */
    public static function check()
    {
        if (self::getUser() === null) {
            return false;
        }

        return true;
    }

    /**
     * Get the currently authenticated user.
     *
     * @return User
     */
    public static function getUser()
    {
        if (!self::$user) {
            $userId = Session::get('userId');
            self::$user = UserService::findOneById($userId);
        }

        return self::$user;
    }
}
