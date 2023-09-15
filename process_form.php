<?php

    include_once 'db.php';

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
            $mail->Username = 'geotechhub2023@gmail.com';                   
            $mail->Password = 'fxzecfarztccuvsv';   
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         
            $mail->Port = 465; 
    
            // Sender and recipient settings
            $mail->setFrom('no-reply@sas.susl.com', "Geo Tech Hub");
            $mail->addReplyTo('no-reply@sas.susl.com', "Geo Tech Hub");
            $mail->addAddress("geotechhubsusl@gmail.com");
    
            // Email content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Password Reset Request from Geo Tech Hub';
            $mail->Body = $message_body;
    
            // Send email
            $mail->send();

            $sql = "INSERT INTO message (`name`, `email`, `message`) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $message);

            if ($stmt->execute()) {
                $stmt->close();
                $conn->close();
                header("Location:contact.php?message_sent_successfully");
                exit;
            } else {
                $stmt->close();
                $conn->close();
                echo "Error: " . $stmt->error;
            }

            
            
            


        } catch (Exception $e) {
            header("Location:contact.php?showModal=true&status=unsuccess&message=Email not sent!");
        }

?>
