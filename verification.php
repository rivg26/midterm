<?php
  include_once 'header.php';
?>
<?php
  
  require_once 'includes/dbh.inc.php';
  require_once 'includes/functions.inc.php';

  $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $email= '';
  if(strpos($fullUrl,"success=1") == true){
    $email = $_GET['email'];
  }


?>

<section class="signup-form">
    <h2>Verification System</h2>
    <div class="signup-form-form">
        <form action="includes/verification.inc.php" method = "post">
            <p>Please Input the Verification code in your Email</p>
            <p>Code will expire after 5 mins</p>
            <input type="text" name = "vemail" value ="<?= $email ?>" readonly>
            <input type="text" name ="vcode" placeholder = "Verification code">
            <button type = "submit" name = "vresend" value = "resend" onclick= "myFunction()">Resend Code</button>
            <button type="submit" name ="venter">Verify</button>
        </form>
    </div>
      
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "invalidcode" ){
          echo "<p>Invalid Code!</p>";
        }
      }
    ?>
</section>
      
<script>  
  function myFunction(){
    alert("Code Resend! Please Check on Email!");
  }
</script>

<?php
  include_once 'footer.php';
?>