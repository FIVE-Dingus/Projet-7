<?php
require_once "../cfg/config.php";
$sql = "DELETE FROM article WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($dataBinded);//on l'execute

header("location:../admin.php");
?>