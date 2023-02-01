<?php require_once "cfg/config.php";
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Projet 7 : GC News</title>
    <meta name="description" content="Ce site est un Portfolio de William Gabali et de Dylan Beney, deux GigaChad">
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
      <nav style="padding-top: 3%;">
        <div class="nav-wrapper" style="color:#27201F;" >
            <ul id="nav-mobile" class="hide-on-med-and-down">
              <div class="row">
                <div class="col s5 offset-s1">
                  <div class="col s1 l2">
                  <a href="index.php"><img style="width: 55px;" src="img/BDE.png.png"></a>
                  </div>
                  <div class="col s9" style="padding-right:0px" >
                    <h3 style="font-size: 15px; margin-top:15px; margin-bottom:0px;"><b>GC NEWS</b></h3>
                    <p style="font-size: 12px; margin:0px; height:28px; line-height: 1;">Toute l'actualité du jeu vidéo et du Gaming Campus à votre portée !</p>
                  </div>
                </div>
              
                <div class="col s4">
                  <ul class="menu">
                    <li><a class="dropdown-trigger" href="#!">ACTUALITÉS</a></li>
                      
                    <li><a class="dropdown-trigger" href="#!">CAMPUS</a></li>
                      
                    <li><a class="dropdown-trigger" href="#!">VIE ASSOCIATIVE</a></li> 
                  </ul> 
                </div> 
                <div class="col s2">
                  <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                  
                  <?php 
                  if(isset($_SESSION['user'])){
                    echo "<li><a href='admin.php'><i class='material-icons'>account_circle</i></a></li>";
                    echo "<li><a href='action/logout.php'><i class='material-icons'>exit_to_app</i></a></i>";
                    }else{
                      
                    }
                    ?>
                </div> 
              </div>
            </ul>
          <ul id="slide-out" class="sidenav">
          <div class="row">
            <div class="col s5">
              <a href="index.php"><img style="width: 55px;" src="img/BDE.png.png"></a>
            </div>
            <div class="col s1 offset-s2">
              <li><a href="sass.html"><i class="material-icons">search</i></a></li>
            </div>
            <div>
              
            </div>
              <?php 
              if(isset($_SESSION['user'])){
                echo "<li><a href='admin.php'><i class='material-icons'>account_circle</i></a></li>";
                echo "<li><a href='action/logout.php'><i class='material-icons'>exit_to_app</i></a></i>";
                }else{
                  
                }
                ?>
            </div>
          </div>
            <li><a class="dropdown-trigger" href="#!">ACTUALITÉS</a></li>
            <li><a class="dropdown-trigger" href="#!">CAMPUS</a></li>
            <li><a class="dropdown-trigger" href="#!">VIE ASSOCIATIVE</a></li> 
          </ul>
          <a href="connexion.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
      </nav>
    </header>
