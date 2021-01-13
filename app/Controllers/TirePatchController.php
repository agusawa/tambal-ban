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

    public function index()
    {
        $userId = Auth::getUser()->getId();
        $tirePatches = TirePatchService::ownedBy($userId);

        
        $this->render("tire-patches/index.php", [
            'tirePatches' => $tirePatches
        ]); 
    }

    public function delete($id)
    {
        $id = $this->request->param("id");
        $process = TirePatchService::delete($id);

        if ($process) {
            Session::setSuccess("Tambal ban sukses dihapus");
        } else {
            Session::setError("Tambal ban gagal dihapus. Silakan coba lagi");
        }

        $this->redirect("/tire-patches");
    }
}
