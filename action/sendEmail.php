<?php 
$to = "beney7189@gmail.com";
$name = "De: ".$_POST['fname'].".";
$headers = "Cette personne possède cette Email: ".$_POST['email'].".";
$subject = $_POST['content'];
//mail($to,$name,$headers,$subject);


header("location:../index.php");
?>