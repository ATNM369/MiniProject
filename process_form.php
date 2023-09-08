<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    
        try {
            // SMTP configuration
            $mail->isSMTP(); 
            $mail->SMTPAuth = true; 
            $mail->Host = 'smtp.gmail.com';                                                 
            $mail->Username = '';                   
            $mail->Password = '';   
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         
            $mail->Port = 465; 
    
            // Sender and recipient settings
            $mail->setFrom('no-reply@sas.susl.com', "Student Attendance System");
            $mail->addReplyTo('no-reply@sas.susl.com', "Student Attendance System");
            $mail->addAddress($email);
    
            // Email content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Password Reset Request from Student Attendance System';
            $email_template = $message_body;
            $mail->Body = $email_template;
    
            // Send email
            $mail->send();
            
            header("Location:contact.php?message_sent_successfully");
            exit;


        } catch (Exception $e) {
            header("Location:contact.php?showModal=true&status=unsuccess&message=Email not sent! " . $e->getMessage());
        }

?>
