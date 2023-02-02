<?php 
require_once "../cfg/config.php";
$sql = "UPDATE campus_actus SET jaime=:jaime WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':jaime'=> $_POST['jaime'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../campus_actu.php?id='.$_POST["id"]);
?>