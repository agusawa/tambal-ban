<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Services/TirePatchService.php";

class HomeController extends Controller
{
    public function index()
    {
        $this->render("index.php");
    }

    public function find()
    {
        $keyword = $this->request->param("keyword");
        
        $tirePatches = TirePatchService::search($keyword);

        $this->render("find.php", [
            "tirePatches" => $tirePatches
        ]);
    }
}
