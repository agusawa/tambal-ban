<?php

require_once __DIR__ . "/../Core/Helpers/Session.php";
require_once __DIR__ . "/../Core/View.php";
require_once __DIR__ . "/../Core/Helpers/Hash.php";
require_once __DIR__ . "/../Services/UserService.php";

class Login extends View
{
	
	protected function get()
	{
		$this->render("Login.php");
	}

	protected function post()
	{
		$email = $this->request->input("email");
		$password = $this->request->input("password");

		$user = UserService::findOneByEmail($email);

		if ($user && Hash::check($password, $user->getPassword())) {
			Session::setSuccess("Login sukses!");
		} else {
			Session::setError("email atau password tidak sesuai");

			$this->get();
		}

		$this->render("Login.php");
	}
}

new Login();
