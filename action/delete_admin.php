<?php 
require_once "../cfg/config.php";
$sql = "UPDATE user SET admin=0 WHERE email=:email";
$dataBinded=array(
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../admin.php')
?>