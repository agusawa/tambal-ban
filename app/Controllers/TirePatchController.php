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

    public function add()
    {
        $this->render("tire-patches/add.php");
    }

    public function addProcess()
    {
        $name = $this->request->input("name");
        $email = $this->request->input("email");
        $address = $this->request->input("address");
        $description = $this->request->input("description");
        $whatsappNumber = $this->request->input("whatsappNumber");

        $tirePatch = new TirePatch();
        $tirePatch->setName($name);
        $tirePatch->setAddress($address);
        $tirePatch->setDescription($description);
        $tirePatch->setWhatsappNumber($whatsappNumber);

        $process = tirePatchService::insert($tirePatch);

        if ($process) {
            Session::setSuccess("data added successfully");
        } else {
            Session::setError("please check your data again");
        }

        $this->render("tire-patches/add.php");
    }
}
