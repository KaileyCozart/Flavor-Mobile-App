<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "bettafishxanie@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: thankyou.html" );
?>
