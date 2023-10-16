<?php
    include 'connection.php';
          if (isset( $_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $name = $_POST['name']; 
    $number = $_POST['number'];
    $passed = $_POST['passed'];
}
//using sql to create a data entry query
$sql = "INSERT INTO login (email, pass, name, number, passed) VALUES ('$email', '$pass', '$name', '$number', '$passed')"; 
//echo $sql; exit();
//send query to the database to add values and confirm if successful
$rs = mysqli_query($con, $sql);
if($rs)
{
      header("Location: login.html");
    exit();
}
mysqli_close($con);
?>
