<?php 
require_once "../cfg/config.php"; 


$destination1 = "img/".$_FILES['img1']['name']; //dossier "upload"
move_uploaded_file($_FILES['img1']['tmp_name'],$destination1);
$destination2 = "img/".$_FILES['img2']['name']; //dossier "upload"
move_uploaded_file($_FILES['img2']['tmp_name'],$destination2);
$destination3 = "img/".$_FILES['img3']['name']; //dossier "upload"
move_uploaded_file($_FILES['img3']['tmp_name'],$destination3);
$destination4 = "img/".$_FILES['img4']['name']; //dossier "upload"
move_uploaded_file($_FILES['img4']['tmp_name'],$destination4);


$sql = "INSERT INTO projets(prenom,titre,img1,img2,img3,img4,HTML,CSS,JS,PHP,`SQL`,P1,P2,P3,H2,H3,H4) VALUES(:prenom,:titre,:img1,:img2,:img3,:img4,:HTML,:CSS,:JS,:PHP,:SQL,:P1,:P2,:P3,:H2,:H3,:H4)";
$dataBinded=array(
    ':prenom' => $_POST['prenom'],
    ':titre' => $_POST['titre'],
    ':img1' => $destination1,
    ':img2' => $destination2,
    ':img3' => $destination3,
    ':img4' => $destination4,
    ':HTML' => $_POST['HTML'],
    ':CSS' => $_POST['CSS'],
    ':JS' => $_POST['JS'],
    ':PHP' => $_POST['PHP'],
    ':SQL' => $_POST['SQL'],
    ':P1' => $_POST['P1'],
    ':P2' => $_POST['P2'],
    ':P3' => $_POST['P3'],
    ':H2' => $_POST['H2'],
    ':H3' => $_POST['H3'],
    ':H4' => $_POST['H4'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>