<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(email,password,username,fname,name) VALUES(:email,:password,:username,:fname,:name)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> sha1(md5(sha1("hsvbsxhjwbvwdxvwhdxkhkwxbwxhkvkvvjgdsvhjdgdqbvivbfhqdsvbuivbudishvudsbuvdshwbhvkbwvx".$_POST['password']))),
    ':username'=> $_POST['username'],
    ':fname'=>$_POST['fname'],
    ':name'=>$_POST['name'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>