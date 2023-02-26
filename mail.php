<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "kennedy.kan@gongsecrets.com";
    $to = "frogbidofficial@gmail.com";
    $subject = "Mail";
    $message = "Hope You got the message.";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)){
         echo "Test email sent";
    }else{
         echo "email sent failed";
    }
?>