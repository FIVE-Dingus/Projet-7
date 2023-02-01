<?php 
require_once "../cfg/config.php"; 


$destination1 = "img/".$_FILES['img1']['name'];
move_uploaded_file($_FILES['img1']['tmp_name'],"../".$destination1);
$destination2 = "img/".$_FILES['img2']['name']; 
move_uploaded_file($_FILES['img2']['tmp_name'],"../".$destination2);


$sql = "INSERT INTO vie_assiociative(titre,img1,img2,P1,P2) VALUES(:titre,:img1,:img2,:P1,:P2)";
$dataBinded=array(
    ':titre' => $_POST['titre'],
    ':img1' => $destination1,
    ':img2' => $destination2,
    ':P1' => $_POST['P1'],
    ':P2' => $_POST['P2'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
?>