<?php

require __DIR__ . "/../Core/View.php";

class EditTirePatch extends View
{
    private $correctId = "09635";

    protected $inputId;
    protected $inputName;
    protected $inputDescription;
    protected $inputImage;
    protected $inputWhatsapp;

    public function __construct($inputId, $inputName, $inputDescription, $inputImage, $inputWhatsapp)
    {
        // $this->inputId = $inputId;
        // $this->inputName = $inputName;
        // $this->inputDescription = $inputDescription;
        // $this->inputImage = $inputImage;
        // $this->inputWhatsapp = $inputWhatsapp;

        parent::__construct();
    }

    public function save()
    {
        if ($this->inputId === $this->correctId) {
            echo "Sukses";
        } else {
            echo "Id Tidak Terdaftar";
        }
    }
    protected function get()
    {
        $this->render("EditTirePatch.php");
    }

    protected function post()
    {
    }
}

$inputId = "09635";
$inputName = "Budi Saputra";
$inputDescription = "Buka jam 7 pagi";
$inputImage = "gambar.png";
$inputWhatsapp = "085356486921";

$editTirePatch = new EditTirePatch($inputId, $inputName, $inputDescription, $inputImage, $inputWhatsapp);
// $editTirePatch->save();
