<?php

class ChangeProfileInformation {
	private $listId = "abe43";
	private $listEmail = "abe@example.com";

	protected $inputId;
	protected $inputEmail;

	public function __construct($inputId, $inputEmail) {
		$this->inputEmail = $inputEmail;
		$this->inputId = $inputId;
	}

	public function save() {
		if($this->inputId === $this->listId) {
			echo "that id have been used, please use another id. <br/>";
		} else {
			echo "success, your id have been register. <br/>";
		}

		if($this->inputEmail === $this->listEmail) {
			echo "that email have already use, please use another email. <br/>";
		} else {
			echo "succes, your email have been register. <br/>";
		}
	}
}

$inputEmail = "dwirahma@example.com";
$inputId = "rahmadini234";

$changeProfileInformation = new ChangeProfileInformation($inputId, $inputEmail);
$changeProfileInformation -> save();

?>