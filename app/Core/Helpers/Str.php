<?php

if(!class_exists("Str")) {

    class Str
    {

        /**
         * Convert snake case to camel case.
         * 
         * @param string $string
         * @return string
         * 
         * @link https://www.codegrepper.com/code-examples/delphi/convert+snake+case+to+camel+case+php
         */
        
        public static function snakeToCamelCase($string)
        {
            $str = str_replace(" ", "", ucwords(str_replace("_", " ", $string)));
            $str[0] = strtolower($str[0]);
            return $str;
        }
    }
}
