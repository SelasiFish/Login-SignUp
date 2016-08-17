<?php
$db_name = "a9949425_Felix";
$mysql_user = "a9949425_Felix";
$mysql_pass = "moneyfish1993";
$server_name = "mysql12.000webhost.com";

$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

if(!$con)
{
echo "Connection Error".mysqli_connect_error();
}
else
{
echo"<h3>Database connection Success...</h3>";
}

?>
