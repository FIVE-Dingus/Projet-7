<?php 
require_once "../cfg/config.php"; 
if(empty($_POST['email']) and empty($_POST['password'])){
     $_SESSION['error']="email et mot de passe vide! ";
     header('location: ../index.php');
     exit();
}
if(empty($_POST['email'])){
     $_SESSION['error']="email vide! ";
     header('location: ../index.php');
     exit();
}

if(empty($_POST['password'])){
     $_SESSION['error']="mot de passe vide! ";
     header('location: ../index.php');
     exit();
}
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".sha1(md5(sha1("hsvbsxhjwbvwdxvwhdxkhkwxbwxhkvkvvjgdsvhjdgdqbvivbfhqdsvbuivbudishvudsbuvdshwbhvkbwvx".$_POST['password'])))."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     $_SESSION['error']="Utilisateur ou mot de passe incorrect !";
}else{
     session_start();
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>