<?php   
session_start(); //to ensure you are using same session
unset($_SESSION['user']); //unset the session
header("location:../index.php"); //to redirect back to "index.php" after logging out
exit();
?>