<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';
    require_once 'functions.inc.php'; 
    require_once 'dbh.inc.php';

    $mail = new PHPMailer(true);
    
    $email = $_GET['email'];
    $data = emailuidExistsZero($conn,$email);
    $info = array_values($data);
    $code = $info[4];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gregoriosamplecode26@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'coderig123'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';
    
        $mail->setFrom('gregoriosamplecode26@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('gregorioron26@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    
        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = '<h3>Verification Code: '. "$code". '</h3>';

    
        
        if(!$mail->send()){
            echo"Not send";
        }else{
            header("location: ../loginauthen.php?email=$email");
            
        }
    } catch (Exception $e){
        echo "$e";
    }
?>


<!-- $email = $_GET['email'];
    $data = emailuidExistsZero($conn,$email);
    $info = array_values($data);
    $code = $info[4]; -->