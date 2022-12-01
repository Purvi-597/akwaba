<?php   
@session_start(); //to ensure you are using same session
unset($_SESSION['users']);
@session_destroy(); //destroy the session
header("location:http://127.0.0.1:8000/akwaba/index.php"); //to redirect back to "index.php" after logging out
exit();
?>