<?php

require __DIR__ . "/../Core/View.php";

class FindPlace extends View {
    // Dummy data for simulate available tire repair location.
    private $availableLocations = ["Gresik", "Surabaya", "Sidoarjo"];
    private $isLocationFound = false;

    protected $currentLocation;

    public function __construct($currentLocation) {
        // $this->currentLocation = $currentLocation;
        parent::__construct();
    }

    public function check() {
        foreach ($this->availableLocations as $availableLocation) {
            if ($this->currentLocation === $availableLocation) {
                $this->isLocationFound = true;
            }
        }

        $this->isFound();
    }

    private function isFound() {
        if ($this->isLocationFound) {
            echo "Ada tambal ban di lokasi ini.<br />";
        } else {
            echo "Tidak ada tambal ban di lokasi ini.<br />";
        }
    }

    protected function get() {
        $this->render("FindPlace.php");
    }

    protected function post() {

    }
}

// $dumpLocations = ["Gresik", "Sidoarjo", "Lamongan"];
// foreach ($dumpLocations as $location) {
//     $findPlace = new FindPlace($location);
//     $findPlace->check();
// }
$location = "Gresik";
new FindPlace($location);
