<?php 
require_once "../cfg/config.php";
$sql = "UPDATE derniere_actu SET jaime=:jaime WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':jaime'=> $_POST['jaime'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../actu.php?id='.$_POST["id"]);
?>