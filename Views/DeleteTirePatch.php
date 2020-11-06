<?php
require __DIR__ . "/../Core/View.php";
class DeleteTirePatch extends View {
    protected $inputId;
    private $registeredId = "ara123";

    public function __construct($inputId) {
        // $this->inputId = $inputId;
        parent::__construct();
    }

    public function isValidId() {
        if ($this->inputId === $this->registeredId) {
            return true;
        } else {
            return false;
        }
    }

    public function save() {
        if ($this->isValidId()) {
            echo "Tambal Ban berhasil dihapus";
        } else {
            echo "Id akun tidak valid";
        }
    }

    public function get(){
        $this->render("DeleteTirePatch.php");
    }

    public function post(){
        
    }
}

$inputId = "ara";

$DeleteTirePatch = new DeleteTirePatch($inputId);
// $DeleteTirePatch->save();
