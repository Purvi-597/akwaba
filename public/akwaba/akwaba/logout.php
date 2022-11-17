<?php   
session_start(); //to ensure you are using same session
unset($_SESSION['users']);
session_destroy(); //destroy the session
header("location:http://localhost:8888/akwaba/public/akwaba/index.php"); //to redirect back to "index.php" after logging out
exit();
?>