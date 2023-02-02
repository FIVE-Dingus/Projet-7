<?php 
require_once "../cfg/config.php";
$sql = "UPDATE user SET titre=:titre WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':titre'=> $_POST['titre'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../admin.php')
