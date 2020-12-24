<?php

require __DIR__ . "/../Core/Helpers/Hash.php";
require __DIR__ . "/../Core/View.php";
require __DIR__ . "/../Models/User.php";
require __DIR__ . "/../Services/UserService.php";

class Signup extends View
{
    public function get()
    {
        $this->render("Signup.php");
    }

    public function post()
    {
        $name = $this->request->input("name");
        $email = $this->request->input("email");
        $password = $this->request->input("password");
        $passwordHash = Hash::make($password);

        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($passwordHash);
        $user->setCreated(time());

        $process = UserService::insert($user);

        if ($process) {
            Session::setSuccess("Successfully registered");
        } else {
            Session::setError("Email has been registered. Please use another email");
        }

        $this->get();
    }
}
new Signup();