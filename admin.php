<?php

use phpseclib3\Common\Functions\Strings;

use function GuzzleHttp\json_encode;

require_once "cfg/config.php";
?>
<?php
if (!isset($_SESSION['user'])) {
    header('location:connexion.php');
};
$email = $_SESSION['user']['email'];
$sql = "SELECT admin FROM user WHERE email='" . $email . "'";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $user) {

    if ($user['admin'] == 0) {
        header('location:index.php');
    }
};
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
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection">
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
                <div class="col l12" style="margin-bottom: 110px; margin-top: 125px;">
                    <div class="col l2 offset-l1">
                        <a href="index.php"><img src="img/LOGO_GC.png" alt="logo gaming campus" style="width: 55px; align-content:left;"></a>
                    </div>
                    <div class="col l8">
                        <h2 style="font-size: 30px; margin-bottom: 0px; margin-top: 13px;">GC News</h2>
                    </div>
                </div>
                <div class="menu_admin col l11 s12 offset-l1">
                    <div class="col l1">
                        <i class="material-icons">home</i>
                    </div>
                    <div class="col l8 offset-l1">
                        <h5>DashBoard</h5>
                    </div>
                </div>
                <div class="menu_admin col l11 s12 offset-l1">
                    <div class="col l1">
                        <i class="material-icons">date_range</i>
                    </div>
                    <div class="col l8 offset-l1">
                        <h5>Actualités</h5>
                    </div>
                </div>
                <div class="menu_admin col l11 s12 offset-l1">
                    <div class="col l1">
                        <i class="material-icons">settings</i>
                    </div>
                    <div class="col l8 offset-l1">
                        <h5>Paramètres</h5>
                    </div>
                </div>
                <div class="col s12">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Posts</div>
                            <div class="">
                                <ul class="deroulant">
                                    <li><a href="#!"><i class="material-icons">check_circle</i> Posts Publiés </a></li>
                                    <li><a href="#!"><i class="material-icons">alarm</i> Posts Prévus <span class="badge" style="border: #ACACAC; border-radius: 110px;"><i class="material-icons">add</i>1</span></a></li>
                                    <li><a href="#!"><i class="material-icons">bookmark</i> Favoris</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col s12">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Utilisateurs</div>
                        <div class="collapsible-body">
                            <ul>
                                <li>test</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col l9">
            <div class="container_droit grey-background col l12">
                <h2 style="margin-top: 13px;"> Bienvenue</h2>
                <h3 >Ces 30 derniers jours</h3>
                <div class="stats col l3">
                    <h4>Views</h4>
                </div>
                <div class="stats col l3 s12 offset-l1">
                    <h4>Articles</h4>
                    <?php
                        $sql = "SELECT COUNT(*) AS nb_article FROM derniere_actu ";
                        $jaime = "SELECT COUNT(*) AS nb_article FROM campus_actus ";
                        $jaimes = "SELECT COUNT(*) AS nb_article FROM vie_associative ";
                        $pre = $pdo->prepare($sql);
                        $jaime = $pdo->prepare($jaime);
                        $jaimes = $pdo->prepare($jaimes);
                        $pre->execute();
                        $jaime->execute();
                        $jaimes->execute();
                        $like = $pre->fetch(PDO::FETCH_ASSOC);
                        $likes = $jaime->fetch(PDO::FETCH_ASSOC);
                        $vie_like = $jaimes->fetch(PDO::FETCH_ASSOC);
                        echo $like['nb_article']+$likes['nb_article']+$vie_like['nb_article'];
                    ?>
                </div>
                <div class="stats col l3 s12 offset-l1">
                    <div class="col l5">
                        <h4>Likes:</h4>
                    </div>
                    <div class="col l6 offset-l1">
                        <h4><?php
                        $sql = "SELECT SUM(jaime) AS nb_like FROM derniere_actu ";
                        $jaime = "SELECT SUM(jaime) AS nb_like FROM campus_actus ";
                        $jaimes = "SELECT SUM(jaime) AS nb_like FROM vie_associative ";
                        $pre = $pdo->prepare($sql);
                        $jaime = $pdo->prepare($jaime);
                        $jaimes = $pdo->prepare($jaimes);
                        $pre->execute();
                        $jaime->execute();
                        $jaimes->execute();
                        $like = $pre->fetch(PDO::FETCH_ASSOC);
                        $likes = $jaime->fetch(PDO::FETCH_ASSOC);
                        $vie_like = $jaimes->fetch(PDO::FETCH_ASSOC);
                        echo $like['nb_like']+$likes['nb_like']+$vie_like['nb_like'];
                        ?></h4>
                    </div>
                </div>
                <h3 style="margin-top: 13px;">Analyse</h3>
                <div class="col l3 s12 ">
                    <h4>article</h4>
                </div>
                <div class="col l3 s12 offset-l1">
                    <i class="material-icons" style="justify-content: center;">watch_later</i>
                    <h4>Posts prévus</h4>
                </div>
                <div class="col l3 s12 offset-l1">
                    <i class="material-icons" style="justify-content: center;">add_circle</i>
                    <h4>Ajouter un nouveau post</h4>
                </div>
                <h3 style="margin-top: 13px;">Statistiques</h3>
                <div class="col l3 s12 grey-background" style="color:#27201F;">
                    <h5>Objectifs hebdomadaires atteints à :</h5>
                </div>
                <div class="col l3 s12 offset-l1" style="background-color: #4f46ba; color:#FBFBFB;">
                    <h5>Objectifs mensuels atteints à :</h5>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "composant/footer.php"; ?>

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