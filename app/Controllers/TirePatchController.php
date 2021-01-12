<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Auth.php";
require_once __DIR__ . "/../Core/Helpers/Session.php";

class TirePatchController extends Controller
{
    public function edit()
    {
        $user = Auth::getUser();

        $id = $this->request->param("id");
        $tirePatch = TirePatchService::findOneById($id);

        if (TirePatchService::isOwnedBy($user, $tirePatch)) {
            // Proses rendernya di sini.
        } else {
            Session::setError("Anda tidak dapat mengedit data ini. Data ini bukan milik Anda.");
            $this->redirect("/tire-patches");
        }
    }

    public function editProcess()
    {
        $user = Auth::getUser();

        $id = $this->request->param("id");
        $tirePatch = TirePatchService::findOneById($id);

        if (TirePatchService::isOwnedBy($user, $tirePatch)) {
            // Proses edit datanya di sini.
        } else {
            Session::setError("Anda tidak dapat mengedit data ini. Data ini bukan milik Anda.");
            $this->redirect("/tire-patches");
        }
    }
}
