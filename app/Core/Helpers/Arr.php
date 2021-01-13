<?php

require_once __DIR__ . "/../Contracts/Arr.php";

class Arr implements ArrImp
{
    /**
     * Convert PHP SQL result to array of associative array.
     *
     * @param object $result
     * @return array
     */
    public static function fetchAssoc($result)
    {
        $finalResult = [];

        while ($row = $result->fetch_assoc()) {
            array_push($finalResult, $row);
        }

        return $finalResult;
    }
}
