<?php

if (!class_exists("Session")) {
    session_start();

    class Session
    {
        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         */
        public static function get($key, $default = null)
        {
            if (self::has($key)) {
                return $_SESSION[$key];
            }
            return $default;
        }

        /**
         * Checks if a key is present and not null.
         *
         * @param string $key
         * @return boolean
         */
        public static function has($key)
        {
            if (array_key_exists($key, $_SESSION) && $_SESSION[$key] !== null) {
                return true;
            }
            return false;
        }

        /**
         * Put a key / value pair in the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         */
        public static function put($key, $value = null)
        {
            $_SESSION[$key] = $value;
        }

        /**
         * Remove an item from the session.
         *
         * @param string $key
         * @return void
         */
        public static function remove($key)
        {
            unset($_SESSION[$key]);
        }

        /**
         * Get error message and delete it from the session.
         *
         * @return string|null
         */
        public static function getError()
        {
            if (self::has("error")) {
                $error = self::get("error");
                self::remove("error");

                return $error;
            }

            return null;
        }

        /**
         * Put an error message in the session.
         *
         * @param string $message
         * @return void
         */
        public static function setError($message)
        {
            self::put("error", $message);
        }

        /**
         * Get success message and delete it from the session.
         *
         * @return string|null
         */
        public static function getSuccess()
        {
            if (self::has("success")) {
                $success = self::get("success");
                self::remove("success");

                return $success;
            }

            return null;
        }

        /**
         * Put a success message in the session.
         *
         * @param string $message
         * @return void
         */
        public static function setSuccess($message)
        {
            self::put("success", $message);
        }
    }
}
