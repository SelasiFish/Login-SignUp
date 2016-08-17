<?php
 
 require "connection.php";  
 
 
    $name = $_POST["name"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $verification_code = $_POST["verification_code"];
 
 
$sql_query = "insert into LoginSignUp values ('$name', '$country', '$phone', '$password', '$confirm_password', '$verification_code');";
 
if(mysqli_query($con,$sql_query))  
 {  
// echo "<h3> Data insertion Success </h3>; 
 }  
 else  
 {   
//echo "Data insertion error".mysqli_error($con);  
 }  
 
 
?>







