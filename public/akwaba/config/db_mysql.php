<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akwaba_divya";
$conn = new mysqli($servername, $username, $password, $dbname);
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
//echo 'Connected successfully';  

?>
