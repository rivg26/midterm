<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';
    require_once 'functions.inc.php'; 
    require_once 'dbh.inc.php';

    $mail = new PHPMailer(true);
    
    $email = $_GET['email'];
    $data = uidExists($conn,$email);
    $info = array_values($data);
    $code = $info[5];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gregoriosamplecode26@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'coderig123'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';
    
        $mail->setFrom('gregoriosamplecode26@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('gregoriosamplecode26@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    
        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Verification Code: $code";
        
        if(!$mail->send()){
            echo"Not send";
        }else{
            $email = $_GET['email'];
            header("location: ../verification.php?success=1&email=$email");
            
        }
    } catch (Exception $e){
        echo "$e";
    }
?>