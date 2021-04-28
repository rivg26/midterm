<?php

    require_once 'functions.inc.php';
    require_once 'dbh.inc.php';


    if(isset($_POST['venter'])){
        $vcode = $_POST['vcode'];
        $vemail = $_POST['vemail'];
        $data = uidExists($conn,$vemail);
        $info = array_values($data);
        

        if($vcode != $info['5']){
            header("location: ../verification.php?success=1&email=$vemail&error=invalidcode");
         }else{
             date_default_timezone_set("Asia/Hong_Kong");
             $datetime = date("Y-m-d H:i:s");
 
             if($datetime < $info[7]){
                 updateVtoken($conn,$vemail);
                 header("location: ../index.php?error=verifysuccess");
             }
             else{
                 header("location: ../verification.php?error=invalidcode");
             }
             
             
         }
    }
    if(isset($_POST['vresend'])){
        $vemail = $_POST['vemail'];
        resendVtoken($conn,$vemail);
        header("location: emailsent.inc.php?email=$vemail&error=resend");
    }


?>