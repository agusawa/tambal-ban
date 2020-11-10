<?php

require __DIR__ . "/../Core/View.php";
class ChangeProfileInformation extends View {
	private $correctId = "abe43";
	private $registeredEmail = "abe@example.com";

	protected $inputId;
	protected $inputEmail;
	protected $inputName;

	public function __construct($inputId, $inputEmail, $inputName) {
		// $this->inputEmail = $inputEmail;
		// $this->inputId = $inputId;
		// $this->inputName = $inputName;
		parent::__construct();
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

	protected function get() {
		$this->render("ChangeProfileInformation.php");

	}

	protected function post() {
		
	}
}

$inputEmail = "dwirahma@example.com";
$inputId = "rahmadini234";
$inputName = "Howard";

$changeProfileInformation = new ChangeProfileInformation($inputId, $inputEmail, $inputName);
// $changeProfileInformation->isValidId();
// $changeProfileInformation->isRegisteredEmail();

?>
