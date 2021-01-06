<?php

class Arr
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
