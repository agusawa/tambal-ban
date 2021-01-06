<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helpers/Session.php";
require_once __DIR__ . "/../Core/Helpers/Hash.php";
require_once __DIR__ . "/../Services/UserService.php";

class AuthController extends Controller
{
    public function login()
    {
        $this->render("login.php");
    }

    public function loginProcess()
    {
        $email = $this->request->input("email");
		$password = $this->request->input("password");

		$user = UserService::findOneByEmail($email);

		if ($user && Hash::check($password, $user->getPassword())) {
			Session::setSuccess("Login sukses!");
		} else {
			Session::setError("email atau password tidak sesuai");
		}

		$this->render("login.php");
    }
}
