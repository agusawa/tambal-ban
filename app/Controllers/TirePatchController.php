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
