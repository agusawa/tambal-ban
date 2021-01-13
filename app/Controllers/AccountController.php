<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Auth.php";
require_once __DIR__ . "/../Core/Helpers/Hash.php";
require_once __DIR__ . "/../Services/UserService.php";

class AccountController extends Controller
{
    public function changePassword()
    {
        $this->render("/account/change-password.php", [
            "user" => Auth::getUser()
        ]);
    }

    public function changePasswordProcess()
    {
        $user = Auth::getUser();
        $oldPassword = $this->request->input("oldPassword");
        $newPassword = $this->request->input("newPassword");
        $passwordConfirmation = $this->request->input("passwordConfirmation");

        if (Hash::check($oldPassword, $user->getPassword())) {
            if ($newPassword === $passwordConfirmation) {
                $user->setPassword(Hash::make($newPassword));

                $process = UserService::changePassword($user);

                if ($process) {
                    Session::setSuccess("Successfully changed password");
                } else {
                    Session::setError("Ada kesalahan ada sistem.");
                }
            } else {
                Session::setError("Password konfirmasi tidak sama.");
            }
        } else {
            Session::setError("Password lama Anda tidak sesuai.");
        }
        $this->render("/account/change-password.php", [
            "user" => Auth::getUser()
        ]);
    }

    public function edit()
    {
        $this->render("account/edit.php", [
            "user" => Auth::getUser(),
        ]);
    }

    public function editProcess()
    {
        $user = Auth::getUser();

        $name = $this->request->input("name");
        $email = $this->request->input("email");

        $user->setName($name);
        $user->setEmail($email);

        $process = UserService::edit($user);

        if ($process) {
            Session::setSuccess("Data berhasil diubah");
        } else {
            Session::setError("Ada kesalahan");
        }

        $this->render("account/edit.php", [
            "user" => Auth::getUser(),
        ]);
    }
}
