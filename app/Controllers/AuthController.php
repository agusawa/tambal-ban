<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Hash.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Services/UserService.php";

class AuthController extends Controller
{
    public function signUp()
    {
        $this->render("signup.php");
    }

    public function signUpProcess()
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

        $this->render("signup.php");
    }
}
