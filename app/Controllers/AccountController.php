<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Auth.php";

class AccountController extends Controller
{
    public function edit()
    {
       $this->render("account/edit.php", [
           $user = Auth::getUser(),
       ]);
    }

    public function editProcess()
    {
       $user = Auth::getUser();

       $user = $this->request->input("name");
       $user = $this->request->input("email");

       $user->setName($name);
       $user->setEmail($email);

       $process = UserService::edit($user);

       if($process) {
           Session::setSuccess("Success");
       } else {
           Session::setError("Error");
       }
    }
}
