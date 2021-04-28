<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="index-intro">
  <h1>This Is An Introduction</h1>
  <p>Here is an important paragraph that explains the purpose of the website and why you are here!</p>
</section>

<section class="index-categories">
  <h2>Some Basic Categories</h2>
  <div class="index-categories-list">
    <div>
      <h3>Fun Stuff</h3>
    </div>
    <div>
      <h3>Serious Stuff</h3>
    </div>
    <div>
      <h3>Exciting Stuff</h3>
    </div>
    <div>
      <h3>Boring Stuff</h3>
    </div>
  </div>

  <div>
  
    <?php
      

      if(isset($_SESSION["userEmail"])){
        $user = $_SESSION["userEmail"];
        require_once 'includes/dbh.inc.php';
        require_once 'includes/functions.inc.php';
       $data = gettingResult($conn,$user);
       $length = count($data);
      }
       
    ?>
  
    <table class = "designtable">
      <tr>
        <th> User </th>
        <th> History </th>
        <th> Date </th>
      </tr>
      <?php
        if(empty($length)){
          $length = null;
        }
        for($i = 0; $i < $length; $i++){
          for($k = 0; $k < 3; $k++){
            echo '<td>'.$data[$i][$k].'</td>';
          }
          echo "<tr></tr>";
        }
      ?>
    </table>
  </div>
  <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "verifysuccess"){
        echo "<h3 style='text-align:center;'>Verification Success</h3>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
