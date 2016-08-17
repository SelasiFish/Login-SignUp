<?php
require "connection.php";


    $User_id = $_POST["User_id"];
    $name = $_POST["name"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $verification_code = $_POST["verification_code"];

$sql_query = "select phone from LoginSignUp where phone like '$phone' and password like '$password';";
$result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $phone =$row["phone"];  
 echo "Login Success..Welcome ".$phone;  
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?>  

?>
