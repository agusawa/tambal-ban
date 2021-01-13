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

        if (TirePatchService::isOwnedBy($user, $tirePatch)) {
            $this->render("edit.php", [
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

        if (TirePatchService::isOwnedBy($user, $tirePatch)) {
            $name = $this->request->input("name");
            $email = $this->request->input("email");
            $description = $this->request->input("description");
            $whatsappNumber = $this->request->input("whatsappNumber");

            $tirePatch->setName($name);
            $tirePatch->setEmail($email);
            $tirePatch->setDescription($description);
            $tirePatch->setWhatsappNumber($whatsappNumber);
            
            $process = TirePatchService::edit($user);

            if ($process) {
                Session::setSuccess("Sukses");
            } else {
                Session::setError("Ada Kesalahan");
            }
        } else {
            Session::setError("Anda tidak dapat mengedit data ini. Data ini bukan milik Anda.");
            $this->redirect("/tire-patches");
        }
    }
}
