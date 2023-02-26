<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    $to = "frogbidofficial@gmail.com";
    $subject = "Mail";
    $message = "Hope You got the message.";

    $sender_name = "Gong Secrets";
    $sender_email = "kennedy.kan@gongsecrets.com";
    //
    $username = "kennedy.kan@gongsecrets.com";
    $password = "Gongsecrets2468";
    //
    $receiver_email = $to;


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    //$mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->Subject = $subject;
    $mail->msgHTML($message);
    $mail->addAddress($receiver_email);


    if($mail->send()){
         echo "Test email sent";
    }else{
         echo "email sent failed";
    }
?>
