<?php
 include 'connection.php';
      if (isset( $_POST['submit']))
{
  $email = $_POST['email'];
    $pass = $_POST['pass'];
}
   //using sql to create a data entry query
$sql = "select * from login where email = '$email' and  pass = '$pass'";
//echo $sql; exit();
//send query to the database to add values and confirm if successful
$rs = mysqli_query($con, $sql);
if($rs)
{
    header("Location: registration.html");
    exit();
}
mysqli_close($con);
?>
