  <?php

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    

  }
  
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hair";

  $con =  mysqli_connect ($host, $username, $password, $dbname);
  if (!$con)
  {
    die("Connection failed!" .mysqli_connect_error());

  }
 
  $sql = "insert into myad(name,email,gender,phone,address) VALUES
  ('$name','$email','$gender','$phone','$address')";

  $rs = mysqli_query($con,$sql);

  if ($rs)
  {
    echo"entries added";
  }

  mysqli_close($con);

  ?>