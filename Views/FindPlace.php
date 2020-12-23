<?php

require __DIR__ . "/../Core/View.php";
require __DIR__ . "/../Services/TirePatchService.php";
require __DIR__ . "/../Core/Helpers/Http.php";

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
