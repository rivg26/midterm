<?php
date_default_timezone_set("Asia/Hong_Kong");
$datetime = date("Y-m-d H:i:s");

// Convert datetime to Unix timestamp
$timestamp = strtotime($datetime);

// Subtract time from datetime
$time = $timestamp + (5 * 60);

// Date and time after subtraction
$newDateTime = date("Y-m-d H:i:s", $time);
echo "$datetime <br>";
echo "$newDateTime <br>";
if($datetime < $newDateTime ){
    echo "Success";
}else{
    echo "Nah";
}

