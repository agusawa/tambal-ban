<?php
  abstract class User {
      
      public $arrayUserId = array(); 

      abstract public function setUserLevel($level);
      abstract public function getUserLevel();

      public function printUserLevel() {
        print($this->getUserLevel()."\n");
      }

      public function genUserId() {
        $prefix ="A";
        $suffix;
        $maxValue = 3;
        $userId = 0;

        for ($index=1; $index <= $maxValue; $index++) {
          $suffix = $index;
          $userId = $prefix.sprintf("%04s",$suffix);
          $this->arrayUserId[$index] = $userId;
        }
        return $this->arrayUserId;
      }

      public function checkParentClass($fileClass) {
        return get_parent_class($fileClass);
      }

      public function checkSubClass($childClass, $parentClass) {
        return is_subclass_of($childClass, $parentClass);
      }
  }
?>