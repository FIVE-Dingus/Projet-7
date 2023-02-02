<?php
require_once "../cfg/config.php";
$sql = "DELETE FROM article WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("location:../admin.php");
?>