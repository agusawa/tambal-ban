<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Auth.php";
require_once __DIR__ . "/../Core/Helpers/Session.php";
require_once __DIR__ . "/../Services/TirePatchService.php";

class TirePatchController extends Controller
{
    public function edit()
    {
        $user = Auth::getUser();

        $id = $this->request->param("id");
        $tirePatch = TirePatchService::findOneById($id);

        if ($tirePatch && TirePatchService::isOwnedBy($user, $tirePatch)) {
            $this->render("tire-patches/edit.php", [
                'tirePatch' => $tirePatch
            ]);
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

        if ($tirePatch && TirePatchService::isOwnedBy($user, $tirePatch)) {
            $name = $this->request->input("name");
            $address = $this->request->input("address");
            $description = $this->request->input("description");
            $whatsappNumber = $this->request->input("whatsappNumber");

            $tirePatch->setName($name);
            $tirePatch->setAddress($address);
            $tirePatch->setDescription($description);
            $tirePatch->setWhatsappNumber($whatsappNumber);

            $process = TirePatchService::edit($tirePatch);

            if ($process) {
                Session::setSuccess("Data berhasil diedit.");
            } else {
                Session::setError("Ada Kesalahan");
            }
        } else {
            Session::setError("Anda tidak dapat mengedit data ini. Data ini bukan milik Anda.");
        }

        $this->redirect("/tire-patches");
    }
}
