<?php 
require_once "../cfg/config.php";
$sql = "UPDATE vie_associative SET jaime=:jaime WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':jaime'=> $_POST['jaime'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('location:../vie_associative.php?id='.$_POST["id"]);
?>