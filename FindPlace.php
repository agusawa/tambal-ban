<?php

class FindPlace {
    // Dummy data for simulate available tire repair location.
    private $available_locations = ['Gresik', 'Surabaya', 'Sidoarjo'];
    protected $current_location;

    public function __construct($current_location)
    {
        $this->current_location = $current_location;
    }

    public function find()
    {
        $isLocationFound = false;

        foreach ($this->available_locations as $available_location) {
            if ($this->current_location === $available_location) {
                $isLocationFound = true;
            }
        }

        if ($isLocationFound) {
            echo "Ada tambal ban di lokasi ini.";
        } else {
            echo "Tidak ada tambal ban di lokasi ini.";
        }
    }
}

$current_location = "Gresik";
$find_place = new FindPlace($current_location);
$find_place->find();

$current_location = "Sidoarjo";
$find_place = new FindPlace($current_location);
$find_place->find();

$current_location = "Lamongan";
$find_place = new FindPlace($current_location);
$find_place->find();
