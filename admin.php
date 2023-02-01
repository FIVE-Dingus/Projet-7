<?php require_once "composant/menu.php";
if(!isset($_SESSION['user'])){
    header('location:connexion.php');
};
    $email = $_SESSION['user']['email'];
        $commande = "SELECT admin FROM user WHERE email='".$email."'";
        $prepar = $pdo->prepare($commande);
        $prepar->execute();
        $data = $prepar->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $user){
        
 if($user['admin']==0){
  header('location:index.php');}};
?>

<html>
    <body>
        <div class="row">
            <div class="col l3">
                <div class="container white-background">
                    <h3>Test</h3>
                </div>    
            </div>
            <div class="col l9">
                <div class="container grey-background">
            </div>    
        </div>

<?php require_once "composant/footer.php";?>

<!-- <form method="post" action="action/add_arcticle.php" enctype="multipart/form-data">
    <label for="#titre">Titre</label>
    <input id="titre" type='title' name='titre'>
    <label for="#img1">Première image de l'article</label>
    <input id="img1" type='file' name='img1'>
    <label for="#img2"></label>
    <input id="img2" type='file' name='img2'>
    <label for="#P1">Paragraphe n°1</label>
    <input id="P1" type='text' name='P1'>
    <label for="#P2">Paragraphe n°2</label>
    <input id="P2" type='text' name='P2'>
    <input type='submit' value="Créer l'article" />
</form> -->