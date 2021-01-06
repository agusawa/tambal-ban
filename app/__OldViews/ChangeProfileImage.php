<?php

require_once __DIR__ . "/../Core/View.php";

class ChangeProfileImage extends View
{
    private $registeredId = "ara12";

    protected $inputId;
    protected $inputImage;

    public function __construct($inputId, $inputImage)
    {
        // $this->inputId = $inputId;
        // $this->inputImage = $inputImage;
        parent::__construct();
    }

    public function isValidId()
    {
        if ($this->inputId === $this->registeredId) {
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        if ($this->isValidId()) {
            echo "Gambar berhasil diubah";
        } else {
            echo "Id akun tidak valid";
        }
    }

    public function get()
    {
        $this->render("ChangeProfileImage.php");
    }

    public function post()
    {
    }
}

$inputId = "ara123";
$inputImage = "gambar.png";

$ChangeProfileImage = new ChangeProfileImage($inputId, $inputImage);
// $ChangeProfileImage->save();
