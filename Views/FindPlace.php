<?php

require __DIR__ . "/../Core/View.php";
require __DIR__ . "/../Core/Helpers/Http.php";

class FindPlace extends View
{
    use OnlyHttpGet;
    
    protected function get()
    {
        $this->render("FindPlace.php");
    }

}

new FindPlace();
