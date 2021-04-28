<?php
  include_once 'header.php';
?>
<?php $email = $_GET['email'];?>
<?php 

    $suc = '';

    if(!empty($_GET['success'])){
        $suc = $_GET['success'];
    }



?>
<section class="signup-form">
  <h2>Change Pass</h2>
  <div class="signup-form-form">
    <form action="includes/changepass.inc.php" method="post">
      <input type="text" name="uid" value = "<?= $email ?> "placeholder="Username/Email..." readonly>
      <input type="password" name="oldPassword" placeholder="Input Old Password">
      <input type="password" name="newPassword" placeholder="New Password">
      <button type="submit" name="submit">Update Password</button>
      
      
    </form>
    
  </div>
  <?php
    

    if($suc == "true"){
        echo "<p>Password updated!</p>";
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
