<?php

require_once __DIR__ . "/../Core/View.php";
require_once __DIR__ . "/../Services/TirePatchService.php";
require_once __DIR__ . "/../Core/Helpers/Http.php";

class FindPlace extends View
{
    use OnlyHttpGet;
    
    protected function get()
    {
        $keyword = $this->request->param("keyword");
        
        $tirePatches = TirePatchService::search($keyword);

        $this->render("FindPlace.php", [
            "tirePatches" => $tirePatches
        ]);
    }

}

new FindPlace();
