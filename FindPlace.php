<?php
// revision: 
// 1. coding using english word
// 2. choose typing CamelCase or Snake Case or Pascal Case or Normal Case
// 3. no. 2 should consistent
// 4. style curl brace ==> {}, example 
// 4.1 function() {
     
//     }
// 4.2 function()
//     {
    
//     }
// 5. choose no. 4.1 or no. 4.2
// 6. choose the right data type ==> char ('') or string("")
// 7. before create login and registration is used to create a account firstly

class FindPlace {
    // Dummy data for simulate available tire repair location.
    private $available_locations = ['Gresik', 'Surabaya', 'Sidoarjo'];
    protected $current_location;
    private $isLocationFound=false;

    public function __construct($current_location) {
        $this->current_location = $current_location;
    }

    public function check() {

        foreach ($this->available_locations as $available_location) {
            if ($this->current_location === $available_location) {
                $this->isLocationFound = true;
            }
        }

        $this->isfind();
    }

    private function isfind() {
        if ($this->isLocationFound) {
            print("Ada tambal ban di lokasi ini.\n");
        } else {
            print("Tidak ada tambal ban di lokasi ini.\n");
        }       
    }
}

// $current_location = "Gresik";
// $find_place = new FindPlace($current_location);
// $find_place->find();

// $current_location = "Sidoarjo";
// $find_place = new FindPlace($current_location);
// $find_place->find();

// $current_location = "Lamongan";
// $find_place = new FindPlace($current_location);
// $find_place->find();

$dumloc =array("Gresik","Sidoarjo","Lamongan");
for ($index = 0; $index < count($dumloc); $index++) {
    $finpla =new FindPlace($dumloc[$index]);
    $finpla->check();
}