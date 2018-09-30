<?php
  if(isset($_POST['submit'])) {
     $to       = "info@riouxfire.com";
    $subject  = $_POST[''];
    $body     = $_POST[''];
    $headers     = "From: " .$_POST['email'];
    mail($to, $subject, $body, $headers);
  }
?>