<?php
class login {
	private $correctEmail = "peter@example.com";
	private $correctPassword = "peter1234";

	protected $inputEmail;
	protected $inputPassword;

	public function __construct($inputEmail, $inputPassword) {
		$this->inputEmail = $inputEmail;
		$this->inputPassword = $inputPassword;
	}

	public function isValid() {
		if($this->inputEmail === $this->correctEmail AND $this->inputPassword === $this->correctPassword) {
			echo "Login succesful!";
		} else {
			echo "wrong password or email!";
		}
	}

	protected function get() {

	}

	protected function post() {
		
	}
}

$inputEmail = "peter@example.com";
$inputPassword = "peter1234";

$login = new login($inputEmail, $inputPassword);
$login ->isValid();
