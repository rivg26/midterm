<?php
session_start();
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
date_default_timezone_set("Asia/Hong_Kong");
$datetime = date("Y-m-d H:i:s");
$event = "Log Out";
$username = $_SESSION["useruid"];
$uidExists = uidExists($conn, $username);
recordEvent($conn,$uidExists['usersEmail'],$event,$datetime);
session_unset();
session_destroy();

header("location: index.php");
exit();

?>