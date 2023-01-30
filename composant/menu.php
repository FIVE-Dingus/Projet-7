<?php require_once "cfg/config.php"?>
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
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#">TENDANCES</a></li>
      <li><a href="#">JEU VIDÉO</a></li>
      <li><a href="#">ESPORT</a></li>
      <li><a href="#">POLITIQUE</a></li>
      <li><a href="#">DESIGN</a></li>
      <li><a href="#">BUSINESS</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#">SPÉCIAL GBUSINESS</a></li>
      <li><a href="#">SPÉCIAL GART</a></li>
      <li><a href="#">SPÉCIAL GTECH</a></li>
      <li><a href="#">RÉCENTS</a></li>
      <li><a href="#">NON RÉCENTS</a></li>
      <li><a href="#">ARCHIVES</a></li>
    </ul>
    
      <nav style="padding-top: 3%;">
        <div class="nav-wrapper" style="color:#27201F;" >
            <ul id="nav-mobile" class="hide-on-med-and-down">
              <div class="row">
                <div class="col s5 offset-s1">
                  <div class="col s1 l2">
                  <a href="index.php"><img style="width: 55px;" src="img/BDE.png.png"></a>
                  </div>
                  <div class="col s10" style="padding-right:0px" >
                    <h3 style="font-size: 15px; margin-top:15px; margin-bottom:0px;"><b>GC NEWS</b></h3>
                    <p style="font-size: 12px; margin:0px; height:28px; line-height: 1;">Toute l'actualité du jeu vidéo et du Gaming Campus à votre portée !</p>
                  </div>
                </div>
              
                <div class="col s3 offset-s1">
                  <ul class="menu">
                        <li class="titlenav">
                          <a class="txt_actu" href="#">ACTUALITÉS</a>
                          <ul class="sous-menu dropdown-content">
                            <li><a href="#">TENDANCES</a></li>
                            <li><a href="#">JEU VIDÉO</a></li>
                            <li><a href="#">ESPORT</a></li>
                            <li><a href="#">POLITIQUE</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">BUSINESS</a>
                              <ul class="sous-menu2 dropdown-content">
                                  <li><a href="#">SPÉCIAL GBUSINESS</a></li>
                                  <li><a href="#">SPÉCIAL GART</a></li>
                                  <li><a href="#">SPÉCIAL GTECH</a></li>
                                  <li><a href="#">RÉCENTS</a></li>
                                  <li><a href="#">NON RÉCENTS</a></li>
                                  <li><a href="#">ARCHIVES</a></li>
                              </ul>
                            </li>
                          </ul>  
                        </li>
                      
                        
                        <li class="titlenav">
                          <a class="txt_camp" href="#">CAMPUS</a>
                          <ul class="sous-menu dropdown-content">
                            <li><a href="#">PROJET EN COURS</a></li>
                            <li><a href="#">CONCOURS</a></li>
                            <li><a href="#">OBJETS PERDUS/ TROUVÉS</a></li>
                          </ul>
                        </li>
                      
                        
                      <li class="titlenav">
                        <a class="txt_vie" href="#">VIE ASSOCIATIVE</a>
                        <ul class="sous-menu dropdown-content">
                          <li><a href="#">KATOCHI</a></li>
                          <li><a href="#">BDE</a></li>
                          <li><a href="#">GENIUS</a></li>
                          <li><a href="#">2RIVALS</a></li>
                          <li><a href="#">WEB FACTORY</a></li>
                        </ul> 
                      </li> 
                    </ul> 
                </div>  
              </div>
            </ul>
          <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
            </div>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
      </nav>
    </header>