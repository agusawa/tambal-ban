<?php

class AddTirePatch {
	private $correctAccountId = "bengkelAnugrah";

	protected $inputAccountId;
	protected $inputName;
	protected $inputDescription;
	protected $inputPicture;
	protected $inputNoWhatsapp;

	public function __construct($inputAccountId, $inputName, $inputDescription, $inputPicture, $inputNoWhatsapp) {
		$this->inputAccountId = $inputAccountId;
		$this->inputName = $inputName;
		$this->inputDescription = $inputDescription;
		$this->inputPicture = $inputPicture;
		$this->inputNoWhatsapp = $inputNoWhatsapp;
	}

	public function save() {
		if($this->inputAccountId === $this->correctAccountId) {
			echo "the id have already been saved";
		} else {
			echo "success, the id will be added";
		}
	}
}

$inputAccountId = "bengkelAnugrah";
$inputName = "Dante";
$inputDescription = "";
$inputPicture = "image.png";
$inputNoWhatsapp = '08211324356';

$addTirePatch = new addTirePatch($inputAccountId, $inputName, $inputDescription, $inputPicture, $inputNoWhatsapp);
$addTirePatch->save();

?>