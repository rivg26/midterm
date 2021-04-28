<?php 


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        date_default_timezone_set("Asia/Hong_Kong");
        $datetime = date("Y-m-d H:i:s");
        $event = "Forgot Password";
		recordEvent($conn,$email,$event,$datetime);
        header("location: ../changepass.php?email=$email");
    }


















?>