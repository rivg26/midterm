<?php 


   if(isset($_GET['email'])){
      $mail = $_GET['email'];
   }else{
      $mail = null;
   }

   if(isset($_GET['phonenumber'])){
      $phoneNumber = $_GET['phonenumber'];
   }else{
      $phoneNumber = null;
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rrdc-signup.css">
    <link rel="stylesheet" href="css/rrdc-signup2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center my-4">
							<img src="img/logoViolet.png"  class="img-fluid" alt="">
						 </div>

					</div>
                   <form id = "form">
                            <div class="form-group mb-2">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="text" name="email"  class="form-control border-0" id="sign-email" value = "<?= $mail ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Input Email Code</label>
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" id = "input-email" placeholder="Send Verification Code Via Email" >
                                        <button class="btn btn-outline-secondary" type="submit" id = "btn-email" >Send Code</button>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                              <label for="exampleInputEmail1">Phone Number</label>
                              <input type="text" name="email"  class="form-control border-0" id="sign-phone" value = "<?= $phoneNumber ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Input Phone Number Code </label>
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" id = "input-phone" placeholder="Send Verification Code Via Phone Number" >
                                        <button class="btn btn-outline-secondary" type="submit" id = "btn-phone" >Send Code</button>
                                </div>
                            </div>
                           <div class="form-group mt-4">
                              <p class="text-center">Verification Security</p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button id= "btn-validate" type="submit" class="google btn mybtn">Validate</button>
                           </div>
                           <div class="col-md-12 ">
                              <br>
                           </div>
                           <div class="col-md-12 mb-3">
                              <ul id = "form-messages">
                                
                              </ul>
                           </div>
                           <div class="form-group">
                              <p class="text-center">&#169;2021 RRDC All Rights Reserved</p>
                           </div>
                        </form>
                 
				</div>
			</div>
</body>
<script type = "text/javascript" src = "js/rrdc-signup-validation.js"></script>
</html>