<?php

// Check for empty input signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid username
function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid email
function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdvalidate($pwd){
	$pwdErr;
	$pattern = "/[`'\"~!@# $*()<>,:;{}\|]/";

	if (strlen($pwd) <= 8) {
        $pwdErr = true;
    }
    elseif(!preg_match("#[0-9]+#",$pwd)) {
        $pwdErr = true;
    }
    elseif(!preg_match("#[A-Z]+#",$pwd)) {
        $pwdErr = true;
    }
    elseif(!preg_match("#[a-z]+#",$pwd)) {
        $pwdErr = true;
    }
	elseif(!preg_match($pattern,$pwd)){
		$pwdErr = true;
	}
	else{
		$pwdErr = false;
	}
	return $pwdErr;
}
function passworderrorhandler($pwd){
	$pattern = "/[`'\"~!@# $*()<>,:;{}\|]/";
	if (strlen($pwd) < 8) {
        header("location: ../signup.php?error=length");
		exit();
    }
    if(!preg_match("#[0-9]+#",$pwd)) {
        header("location: ../signup.php?error=numbers");
		exit();
    }
    if(!preg_match("#[A-Z]+#",$pwd)) {
        header("location: ../signup.php?error=capital");
		exit();
    }
    if(!preg_match("#[a-z]+#",$pwd)) {
        header("location: ../signup.php?error=small");
		exit();
    }
	if(!preg_match($pattern,$pwd)){
		header("location: ../signup.php?error=symbol");
		exit();
	}
}



// Check if passwords matches
function pwdMatch($pwd, $pwdrepeat) {
	$result;
	if ($pwd !== $pwdrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if username is in database, if so then return data
function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	// "Get result" returns the results from a prepared statement
	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function emailuidExists($conn, $email) {
	$sql = "SELECT * FROM userslogin WHERE usersEmail = ?  AND usersLogInExp = ?;";
	  $param = 1;
	  $namearray = [];
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../login.php?error=stmtfailed");
		  exit();
	  }
  
	  mysqli_stmt_bind_param($stmt, "ss", $email,$param);
	  mysqli_stmt_execute($stmt);
  
	  // "Get result" returns the results from a prepared statement
	  $resultData = mysqli_stmt_get_result($stmt);
  
	  if ($row = mysqli_fetch_assoc($resultData)) {
		  while($row = mysqli_fetch_array($resultData)){
			array_push($namearray,$row);
		  }
		  return $namearray;
	  }
	  else {
		  $result = false;
		  return $result;
	  }
  
	  mysqli_stmt_close($stmt);
  }

  function emailuidExistsZero($conn, $email) {
	$sql = "SELECT * FROM userslogin WHERE usersEmail = ?  AND usersLogInExp = ?;";
	  $param = 0;
	  $namearray = [];
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../login.php?error=stmtfailed");
		  exit();
	  }
  
	  mysqli_stmt_bind_param($stmt, "ss", $email,$param);
	  mysqli_stmt_execute($stmt);
  
	  // "Get result" returns the results from a prepared statement
	  $resultData = mysqli_stmt_get_result($stmt);
  
	  if ($row = mysqli_fetch_assoc($resultData)) {
		 return $row;
	  }
	  else {
		  $result = false;
		  return $result;
	  }
  
	  mysqli_stmt_close($stmt);
  }


// Insert new user into database
function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd,userVcode,userVtoken,userDateTime) VALUES (?, ?, ?, ?, ?, ?,?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	$hashVcode = generateKey($conn,$username);
	$vtoken = 0;
	date_default_timezone_set("Asia/Hong_Kong");
	$datetime = date("Y-m-d H:i:s");

	// Convert datetime to Unix timestamp
	$timestamp = strtotime($datetime);

	// Subtract time from datetime
	$time = $timestamp + (5 * 60);

	// Date and time after subtraction
	$newDateTime = date("Y-m-d H:i:s", $time);
	// sendcode();
	mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $username, $hashedPwd,$hashVcode,$vtoken,$newDateTime);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none&email=$email");
	exit();
}

// Check for empty input login
function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Log user into website
function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username);
	$info = array_values($uidExists);
	if($info[6] == 0){
		header("location: ../verification.php?success=1&email=$info[2]");
		exit();
	}
	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		$event = "Log In";
		date_default_timezone_set("Asia/Hong_Kong");
        $datetime = date("Y-m-d H:i:s");
		recordEvent($conn,$username,$event,$datetime);
		loginchecking($conn,$info[2]);
	
	}
}


function logInSendData($conn,$username){
	$data = uidExists($conn, $username);
	$info = array_values($data);
	$sql = "INSERT INTO userslogin (usersID,usersEmail,usersLogInDate,usersLogInCode,usersLogInExp) VALUES (?, ?, ?,?,?);";
	$id = $info[0];
	$exp = 0;
	$code = logingenerateKey($conn);
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../login.php?error=stmtfailed");
		exit();
	}
	date_default_timezone_set("Asia/Hong_Kong");
	$datetime = date("Y-m-d H:i:s");

	// Convert datetime to Unix timestamp
	$timestamp = strtotime($datetime);

	// Subtract time from datetime
	$time = $timestamp + (1 * 60);

	// Date and time after subtraction
	$newDateTime = date("Y-m-d H:i:s", $time);

	mysqli_stmt_bind_param($stmt,"issss",$id,$username,$newDateTime,$code,$exp);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: emailsentlogin.inc.php?email=$info[2]");
	exit();
}



function recordEvent($conn,$username,$event){
	$sql = "INSERT INTO records (recordUser, recordHistory, recordDate) VALUES (?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	 	

	date_default_timezone_set("Asia/Hong_Kong");
	$datetime = date("Y-m-d H:i:s");


	mysqli_stmt_bind_param($stmt,"sss",$username,$event,$datetime);
	mysqli_stmt_execute($stmt);

}

function loginchecking($conn,$email){
	updateLogInExpiration($conn,$email);
	
		
	logInSendData($conn,$email);
	
	

}


function updateLogInExpiration($conn,$email){
	$sql = "UPDATE userslogin SET usersLogInExp = ? where usersEmail = ?;";
	$users = 1;
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../login.php?error=stmtfailed");
		exit();
	}
	
	// sendcode();
	mysqli_stmt_bind_param($stmt, "si",$users,$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

}

function updatePassword($conn,$email,$password){
	$sql = "UPDATE users SET usersPwd = ? where usersEmail = ?;";
	
	$stmt = mysqli_stmt_init($conn);

	mysqli_stmt_prepare($stmt, $sql);
	
	$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "si",$hashedPwd,$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

}






function updateVtoken($conn,$email){
	$sql = "UPDATE users SET userVtoken = ? where usersEmail = ?;";
	$users = 1;
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	// sendcode();
	mysqli_stmt_bind_param($stmt, "ss",$users,$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}

function checkKeys($conn,$randStr,$username){
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	// "Get result" returns the results from a prepared statement
	$resultData = mysqli_stmt_get_result($stmt);

	while($row = mysqli_fetch_assoc($resultData)){
		if($row['userVcode'] === $randStr){
			$keyExists = true;
			break;
		}else{
			$keyExists = false;
		}
	}
	return $keyExists;
}

function logincheckKeys($conn,$randStr){
	$sql = "SELECT * FROM userslogin;";
	$resultData = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($resultData)){
		if($row['usersLogInCode'] === $randStr){
			$keyExists = true;
			break;
		}else{
			$keyExists = false;
		}
	}
	return $keyExists;
}
function gettingResult($conn,$email){
	$sql = "SELECT * FROM records where recordUser = '$email';";
	$resultData = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_all($resultData)){
		$data = $row;
	}

	return $data;
}

function logingenerateKey($conn){
	$keyLength = 6;
	$str = "1234567890";
	$randStr = substr(str_shuffle($str),0,$keyLength);

	$checkKey = logincheckKeys($conn,$randStr);
	while ($checkKey == true){
		$randStr = substr(str_shuffle($str),0,$keyLength);
		$checkKey = logincheckKeys($conn,$randStr);
	}
	return $randStr;
}

function generateKey($conn,$username){
	$keyLength = 8;
	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	$randStr = substr(str_shuffle($str),0,$keyLength);

	$checkKey = checkKeys($conn,$randStr,$username);
	while ($checkKey == true){
		$randStr = substr(str_shuffle($str),0,$keyLength);
		$checkKey = checkKeys($conn,$randStr);
	}
	return $randStr;
}


function resendVtoken($conn,$email){
	$sql = "UPDATE users SET userDateTime = ? , userVcode = ? where usersEmail = ?;";
	$datetime = date("Y-m-d H:i:s");

	// Convert datetime to Unix timestamp
	$timestamp = strtotime($datetime);

	// Subtract time from datetime
	$time = $timestamp + (5 * 60);

	// Date and time after subtraction
	$newDateTime = date("Y-m-d H:i:s", $time);
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	// sendcode();
	mysqli_stmt_bind_param($stmt, "sss",$newDateTime,generateKey($conn,$email),$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	echo "<p>New code was send</p>";

}

