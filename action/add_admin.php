<?php 
require_once "../cfg/config.php";
$sql = "UPDATE user SET admin=1 WHERE email=:email";
$dataBinded=array(
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('location:../admin.php')
?>