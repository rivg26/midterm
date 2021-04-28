<?php


$user = "gregoriosamplecode26@gmail.com";
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

$data = gettingResult($conn,$user);
// var_dump($data) . "<br>";

foreach($data as $result){
    foreach($result as $text){
      echo $text;
    }
  }
