<?php

    require_once "./PHPMailer/vendor/autoload.php";
    require_once "./MailException.php";
    require_once "./Mailer.php";    

    $to = 'matpoa3ntosacco@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    
    $body = $name . "\n" . $email . "\n" . $text;

    try{
        $mailer = new Mailer("support");
        $mailer->sendMail([$to],$subject,$body);
    }catch(MailException $e){
        echo $e->getMessage();
        exit();
    }

    echo "Message sent successfully!";  


?>
