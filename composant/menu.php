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
        <div class="nav-wrapper black" >
        <?php
        require_once "cfg/config.php";
        if(isset($_SESSION['user'])){
            echo "<a href='action/logout.php'><img src='img/icons8-sortie-50.png' alt='' height=100% ></a>";
        }elseif(isset($_SESSION['error'])){
            echo ($_SESSION['error']);
            unset($_SESSION['error']);
        }else{
          echo "Vous n'êtes pas connecter";
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
                require_once "cfg/config.php";
                if(isset($_SESSION['user'])){
                    if($_SESSION['user']['admin']==1){
                        echo "<li><a href='admin.php' text-decoration:none><img src='img/icons8-parametres-administrateur-homme-50.png'></a></li>";}}        
                ?>
                
            </ul>
          <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
            <div class="background">
                <img src="img/Kyhudji_background.jpg" alt="Background de la side nav">
            </div>
            <a href="https://gamingcampus.fr"><i><img class="circle" src="https://img-cdn.tnwcdn.com/image?url=https%3A%2F%2Fpbs.twimg.com%2Fprofile_images%2F1267815531391770625%2FcAGe24Ly.jpg&signature=bd635c392b10c6a4ef378e48e4ce42f0" alt="Logo du Gaming Campus"></i></a>
            <span class="white-text name">Beney Dylan</span>
            <span class="white-text email">Gabali William</span></div></li>
            <li class="kyhudji"><a href="kyhudji.php"><i><img src="https://pbs.twimg.com/profile_images/1567358240224153600/iHuX-JWg_400x400.jpg" alt="Logo de William" rel="no-follow"></i>Kyhudji.gg</a></li>
            <li class="squadhost_nav"><a href="squadHost_.php"><i><img src="img/logo.PNG" alt="Logo de SquadHost_"></i>SquadHost_</a></li>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
      </nav>
    </header>