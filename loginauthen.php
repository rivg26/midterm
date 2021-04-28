<?php
  include_once 'header.php';
?>
 
 <?php $email = $_GET['email']; ?>

<section class="signup-form">
    <h2>Log In Authentication</h2>
    <p></p>
    <div class="signup-form-form">
        <form action="includes/loginathen.inc.php" method="post">
            <input type="text" name="email" placeholder="Email" value ="<?= $email ?>" readonly>
            <input type="text" name="logincode" placeholder="Code">
            <button type="submit" name="loginverify">Verify</button>
            <button type="submit" name="resend">Resend Code</button>
        </form>
    </div>

    <?php
      if(isset($_GET["success"])){
        if($_GET["success"] == "0" ){
          echo "<p>Invalid Code!</p>";
        }
      }
    ?>
</section>






<?php
  include_once 'footer.php';
?>