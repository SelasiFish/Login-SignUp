<?php
require"connection.php";

    $name = $_POST["name"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $verification_code = $_POST["verification_code"];

  $sql_query = "insert into user_info values ($name, $country, $phone, $password, $confirm_password, $verification_code);";

   if (mysqli_query($con, $sql_query))
   {
   echo"<h3>Data Insertion Success...</h3>";
   }
   else
   {
    echo "Data Insertion Error".mysqli_error($con);
   }
    





?>
