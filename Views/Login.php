<?php

require __DIR__ . "/../Core/View.php";

class Login extends View
{
	private $correctEmail = "peter@example.com";
	private $correctPassword = "peter1234";

	protected $inputEmail;
	protected $inputPassword;

	public function __construct($inputEmail, $inputPassword)
	{
		// 	$this->inputEmail = $inputEmail;
		// 	$this->inputPassword = $inputPassword;
		parent::__construct();
	}

	public function isValid()
	{
		if ($this->inputEmail === $this->correctEmail and $this->inputPassword === $this->correctPassword) {
			return true;
		} else {
			return false;
		}
	}

	public function save()
	{
		if ($this->isValid()) {
			echo "Login succesful";
		} else {
			echo "wrong password or email";
		}
	}

	protected function get()
	{
		$this->render("Login.php");
	}

	protected function post()
	{
	}
}

$inputEmail = "peter@example.com";
$inputPassword = "peter1234";

$login = new Login($inputEmail, $inputPassword);
// $login ->isValid();
