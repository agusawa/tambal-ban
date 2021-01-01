<?php

require_once __DIR__ . "/../Core/View.php";

class AddTirePatch extends View
{
	private $correctAccountId = "bengkelAnugrah";

	protected $inputAccountId;
	protected $inputName;
	protected $inputDescription;
	protected $inputPicture;
	protected $inputNoWhatsapp;

	public function __construct($inputAccountId, $inputName, $inputDescription, $inputPicture, $inputNoWhatsapp)
	{
		// $this->inputAccountId = $inputAccountId;
		// $this->inputName = $inputName;
		// $this->inputDescription = $inputDescription;
		// $this->inputPicture = $inputPicture;
		// $this->inputNoWhatsapp = $inputNoWhatsapp;
		parent::__construct();
	}

	public function save()
	{
		if ($this->inputAccountId === $this->correctAccountId) {
			echo "id sudah disimpan";
		} else {
			echo "sukses, id sudah berhasil ditambah";
		}
	}

	protected function get()
	{
		$this->render("AddTirePatch.php");
	}

	protected function post()
	{
	}
}

$inputAccountId = "bengkelAnugrah";
$inputName = "Dante";
$inputDescription = "buka jam 7 pagi";
$inputPicture = "image.png";
$inputNoWhatsapp = '08211324356';

$addTirePatch = new AddTirePatch($inputAccountId, $inputName, $inputDescription, $inputPicture, $inputNoWhatsapp);
// $addTirePatch->save();
