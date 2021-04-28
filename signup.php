<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Sign Up</h2>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Full name...">
      <input type="text" name="email" placeholder="Email...">
      <input type="text" name="uid" placeholder="Username...">
      <input type="password" name="pwd" placeholder="Password...">
      <input type="password" name="pwdrepeat" placeholder="Repeat password...">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      elseif($_GET["error"] == "length"){
        echo "<p>Password must be atleast 8 characters </p>";
      }
      elseif($_GET["error"] == "numbers"){
        echo "<p>Password must contain numbers </p>";
      }
      elseif($_GET["error"] == "capital"){
        echo "<p>Password must contain capital letters </p>";
      }
      elseif($_GET["error"] == "small"){
        echo "<p>Password must contain small letters </p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "symbol") {
        echo "<p>Password must contain atleast 1 symbol </p>";
      }
      else if ($_GET["error"] == "none") {
        $email = $_GET['email'];
        header("Location: includes/emailsent.inc.php?email=$email");
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
