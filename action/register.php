<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(email,password,username) VALUES(:email,:password,:username)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> sha1("hsvbsxhjwbvwdxvwhdxkhkwxbwxhkvkvhwbhvkbwvx".$_POST['password']),
    ':username'=> $_POST['username'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>