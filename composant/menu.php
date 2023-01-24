<?php require_once "cfg/config.php"?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Projet 7 : GC News</title>
    <meta name="description" content="Ce site est un Portfolio de William Gabali et de Dylan Beney, deux GigaChad">
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
      <nav>
        <div class="nav-wrapper white black-text" >
        <?php
        require_once "cfg/config.php";
        if(isset($_SESSION['user'])){
            echo "<a href='action/logout.php'><img src='img/icons8-sortie-50.png' alt='' height=100% ></a>";
        }elseif(isset($_SESSION['error'])){
            echo ($_SESSION['error']);
            unset($_SESSION['error']);
        }else{
          echo "Vous n'êtes pas connecté";
        }
        ?>
        <?php if(!isset($_SESSION['user'])){ ?>
          <a class="waves-effect waves-light btn modal-trigger black" href="#modal2">Inscrivez vous</a>
          <div id="modal2" class="modal">
                <form method="post" action="action/register.php">
                <label for="#email">Votre email</label>
                <input id="email" type='email' name='email'>
                <label for="#password">Votre Mot de passe</label>
                <input id="password" type='password' name='password'>
                <label for="#username">Votre pseudo</label>
                <input id="username" type='username' name='username'>
                <label for="#fname">Votre prénom</label>
                <input id="fname" type='fname' name='fname'>
                <label for="#name">Votre nom</label>
                <input id="name" type='name' name='name'>
                <input type='submit' value='se register' />
            </form>
          </div>
          <a class="waves-effect waves-light btn modal-trigger black" href="#modal3">Connectez vous</a>
          <div id="modal3" class="modal">
            <form method="post" action="action/login.php">
                <label for="#email">Votre email</label>
                <input id="email" type='email' name='email'>
                <label for="#password">Votre Mot de passe</label>
                <input id="password" type='password' name='password'>
                <input type='submit' value='se connecter' />
            </form>
          </div>
        <?php } ?>
            <a href="index.php" class="brand-logo">Accueil</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
                $sql = "SELECT * FROM article";
                $pre = $pdo->prepare($sql);
                $pre->execute();
                $datas = $pre->fetchAll(PDO::FETCH_ASSOC);
                foreach($datas as $article);
                require_once "cfg/config.php";
                if(isset($_SESSION['user'])){
                    if($_SESSION['user']['admin']==1){
                        echo "<li><a href='admin.php' text-decoration:none><img src='img/icons8-parametres-administrateur-homme-50.png'></a></li>";}}
                foreach($datas as $article){ ?>
                    <li><a href="article.php?id=<?php echo $article['id']?>"><?php echo $article['titre']?></a></li>
                <?php }?>
                
            </ul>
          <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
            
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
      </nav>
    </header>