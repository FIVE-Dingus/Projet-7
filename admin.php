<?php require_once "cfg/config.php";
 ?>
 <?php
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


<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>GC News</title>
    <meta name="description" content="GCnews">
    <meta name="google-signin-client_id" content="191504532339-afernn1nkoggl6rcvunsp3roi4dvv57h.apps.googleusercontent.com">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap" rel="stylesheet">
    <meta charset="utf-8">

    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
    </header>
        <div class="row">
            <div class="col l3">
                <div class="container white-background col l12">
                    <div class="col l6">
                        <a href="index.php"><img src="img/LOGO_GC.png" style="width:25px; align-content:left;"> </a>
                        <h2>GC News</h2>
                    </div>
                    <div class="row">
                        <div class="col l2 s12 offset-l1">
                        <i class="material-icons">home</i>
                            <h5>DashBoard</h5>
                        </div>
                        <div class="col l2 s12 offset-l1">
                        <i class="material-icons">date_range</i>
                            <h5>Actualités</h5>
                        </div>
                        <div class="col l2 s12 offset-l1">
                        <i class="material-icons">settings</i>
                            <h5>Paramètres</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Posts</div>
                                    <div class="collapsible-body">
                                        <ul> 
                                            <li><i class="material-icons">check_circle</i> Posts Publiés</li>
                                            <li><i class="material-icons">alarm</i> Posts Prévus</li>
                                            <li><i class="material-icons">bookmark</i> Favoris</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Utilisateurs favoris</div>
                                    <div class="collapsible-body">
                                        <ul> 
                                            <li>test</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col l9">
                <div class="container grey-background col l12">
                    <h2> Bienvenue</h2>
                    <h3>Ces 30 derniers jours</h3>
                    <div class="row">
                        <div class="col l3 s12" style="background-color: purple; border-radius: 5%;">
                            <h4>Views</h4>
                        </div>
                        <div class="col l3 s12 offset-l1" style="background-color: purple; border-radius: 5%;">
                            <h4>Follows</h4>
                        </div>
                        <div class="col l3 s12 offset-l1" style="background-color: purple; border-radius: 5%;">
                            <h4>Likes</h4>
                        </div>
                    </div>
                    <h3>Analyse</h3>
                </div>
            </div>
        </div>


<?php require_once "composant/footer.php";?>

<!-- <form method="post" action="action/add_arcticle_asso.php" enctype="multipart/form-data">
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