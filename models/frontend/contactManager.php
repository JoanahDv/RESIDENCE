<?php
  require('models/connect.php');

  class contactUs
  {
      public function sendMessage($first_name, $last_name, $email, $subject, $message)
      {
          global $db; // defined in models/connect.php
          $query = $db->prepare('
            INSERT INTO contact(first_name, last_name, email, subject, message)
            VALUES(?,?,?,?,?)
          ');
          $result = $query->execute(array($first_name, $last_name, $email, $subject, $message));
       }
  }

?>