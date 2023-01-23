<?php 
require_once "../cfg/config.php";
$sql = "UPDATE user SET username=:username WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':username'=> $_POST['username'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../admin.php')
?>