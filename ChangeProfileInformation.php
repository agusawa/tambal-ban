<?php

class ChangeProfileInformation {
	private $correctId = "abe43";
	private $registeredEmail = "abe@example.com";

	protected $inputId;
	protected $inputEmail;
	protected $inputName;

	public function __construct($inputId, $inputEmail, $inputName) {
		$this->inputEmail = $inputEmail;
		$this->inputId = $inputId;
		$this->inputName = $inputName;
	}

	public function isValidId() {
		if($this->inputId === $this->correctId) {
			echo "that id have been used, please use another id. <br/>";
		} else {
			echo "success, your id have been register. <br/>";
		}
	}

	public function isRegisteredEmail() {
		if($this->inputEmail === $this->registeredEmail) {
			echo "that email have already use, please use another email. <br/>";
		} else {
			echo "succes, your email have been register. <br/>";
		}
	}
}

$inputEmail = "dwirahma@example.com";
$inputId = "rahmadini234";
$inputName = "Howard";

$changeProfileInformation = new ChangeProfileInformation($inputId, $inputEmail, $inputName);
$changeProfileInformation->isValidId();
$changeProfileInformation->isRegisteredEmail();

?>
