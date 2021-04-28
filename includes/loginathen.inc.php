<?php
    require_once 'functions.inc.php';
    require_once 'dbh.inc.php';



    if(isset($_POST['loginverify'])){
        $code = $_POST['logincode'];
        $email = $_POST['email'];

        $emailCode = emailuidExistsZero($conn,$email);
        $info =  array_values($emailCode);
        date_default_timezone_set("Asia/Hong_Kong");
        $datetime = date("Y-m-d H:i:s");

        if($code != $info[4]){
            header("location: ../loginauthen.php?success=0&email=$email");
        }else{
            
            if($datetime <  $info[3]){
                session_start();
                $uidExists = uidExists($conn, $email);
                $event = "Log In Authenticated";
                $user = "rig";
                recordEvent($conn,$email,$event,$datetime);
	            $info = array_values($uidExists);
                $_SESSION["userid"] = $uidExists["usersId"];
                $_SESSION["userEmail"] = $uidExists["usersEmail"];
                $_SESSION["useruid"] = $uidExists["usersUid"];
                header("location: ../index.php?error=none");
                exit();
            }else{
                header("location: ../loginauthen.php?success=0&email=$email");
            }
        }


    }

    if(isset($_POST['resend'])){
        $email = $_POST['email'];
        updateLogInExpiration($conn,$email);
        logInSendData($conn,$email);
    }












?>