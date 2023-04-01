<?php

require_once '../vendor/phpmailer/src/PHPMailer.php';
require_once '../vendor/phpmailer/src/SMTP.php';
require_once '../vendor/phpmailer/src/Exception.php';
require_once '../config/EmailConfig.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    private $host = EMAIL_HOST;
    private $port = EMAIL_PORT;
    // private $smtpsecure = EMAIL_SECURE;
    private $username = EMAIL_USERNAME;
    private $password = EMAIL_PASSWORD;
    private $fromname = EMAIL_FROM_NAME;
    private $address = EMAIL_FROM_ADDRESS;
    private $toaddress = EMAIL_TO_ADDRESS;

    // private $message;

    // public function __construct($message){
    //     $this->message = $message;
    // }

    public function sendMail($name, $email, $message){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = $this->host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->username;
            $mail->Password   = $this->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = $this->port;

            //Recipients
            $mail->setFrom($this->address, $this->fromname);
            $mail->addAddress($this->toaddress);

            //Content
            $mail->isHTML(true);
            $mail->Subject = EMAIL_SUBJECT;
            $mail->Body = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message;;

            if($mail->send()){
                echo "Mail sucssesfuly resieved ";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

