<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Forgot Password</h2>
  <div class="signup-form-form">
    <form action="includes/forgot.inc.php" method="post">
      <input type="text" name="email" placeholder="Input Email">
      <button type="submit" name="submit">Reset Password</button>      
    </form> 
  </div>


</section>

<?php
  include_once 'footer.php';
?>