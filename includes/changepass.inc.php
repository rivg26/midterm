<?php




    if(isset($_POST['submit'])){
        
        $username = $_POST['uid'];
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';

        $uidExists = uidExists($conn, $username);

        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($oldPassword, $pwdHashed);

        if($checkPwd === true){
            $event = "Password Updated";
            recordEvent($conn,$username,$event);
            updatePassword($conn,$username,$newPassword);
            header("location: ../changepass.php?success=true&email=$username");
        }



    }













?>