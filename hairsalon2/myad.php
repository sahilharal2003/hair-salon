<?php
if (isset( $_POST['submit']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
}
//database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hair";
//creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);
//to ensure that the connection is made
if (!$con)
{
    die("Connection failed!".  mysqli_connect_error());
}
//using sql to create a data entry query
$sql = "INSERT INTO myad (name, gender, phone, address) VALUES ('$name', '$gender', '$phone', '$address')";
//echo $sql; exit();//send query to the database to add values and confirm if successful
$rs = mysqli_query($con, $sql);
if($rs)
{
    header("Location: index.html");
    exit();
}
mysqli_close($con);
?>