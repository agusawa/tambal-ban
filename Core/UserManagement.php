<?php
  require_once "./Models/Customer.php";

  $customer = new Customer();
  $customer->setUserLevel("customer");
  $customer->printUserLevel();

  print_r($customer->genUserId());

?>