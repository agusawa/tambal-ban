<?php

if(!class_exists("Hash")) {
    
    class Hash
    {

        /**
         * Hash string with bcrypt algorithm.
         * 
         * @param string $password
         * @return string
         */

        public static function make($password)
        {
            return password_hash($password, PASSWORD_BCRYPT);
        }

        /**
         * Compare whether the passwords are the same.
         * 
         * @param string $password
         * @param string $passwordHash
         * @return boolean
         */

        public static function check($password, $passwordHash)
        {
            return password_verify($password, $passwordHash);
        }
    }
}
