 <?php
    $con = mysqli_connect("localhost:3308", "root", "", "ecommerce")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
