<?php
error_reporting (E_ALL ^ E_NOTICE);
$form = "<form action='./login.php' method='post'>
<table>
<tr>
    <td>phone:</td>
    <td><input type='phone' name= 'phone'/></td>
</tr>
<tr>
    <td>password:</td>
    <td><input type='password' name= 'password'/></td>
</tr>
<tr>
    <td></td>
    <td><input type='submit' name= 'blogin' value='login'/></td>

</tr>
</table>
</form>";

if ($_POST['blogin']){
    $phone = $_POST['phone'];
    $password = $_POST['password']; 

   if ($phone){
      if ($password){
          echo "$phone = $phone <hr /> $form";
      }
      else
         echo "You must enter your password. $form";
   }
   else
       echo "You must enter your phone. $form";
}
else
    echo $form;



?>
