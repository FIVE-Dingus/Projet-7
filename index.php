<?php require_once "composant/menu.php";
 if(!isset($_SESSION['user'])){
  header('location:connexion.php');
 }?>
<?php
$sql = "SELECT * FROM derniere_actu ORDER BY  date DESC";
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC);
if (isset($_SESSION['user'])) { 
    $user = $_SESSION['user'];
} {?>



<div class="mainpage row">
    <div class="title col s10 l6 offset-s1 offset-l2">
        <h2>Actualités</h2>            
    </div>

    <div class="col s12">

        <div class="col s10 l4 offset-s1 offset-l2">
            <div style="position:relative; height:150px">
                <div style="position:absolute;z-index:1">
                    <img src="<?php echo $article[0]['img1'];?>">
                </div>
                <div style="position:relative;left:50px; top:200px; width:200px; height:50px; z-index:2;font-size:200%; @media(min-width : 600px){.article{width : 24.99999%}}">
                <a href="article.php?id=<?php echo $article[0]['id']?>" ><?php echo $article[0]['titre'];?></a>
                </div>
            </div>
        </div>
        <div class="col s10 l3  offset-s1">
            <p>
            <?php echo $article[0]['P1'];?>
            </p>
        </div>
        <div class="col s1 l3">

        </div>
    </div>
    <div class="col s12">
        <div id="actu" class="title col s11 l10 offset-s1 offset-l2">
            <h2>Dernières actualités</h2>
        </div>
        <div>
            <div class="col s10 l2 offset-s1 offset-l2 ">
                <img src="<?php echo $article[1]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[1]['id']?>" ><?php echo $article[1]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[2]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[2]['id']?>" ><?php echo $article[2]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[3]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[3]['id']?>" ><?php echo $article[3]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[4]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[4]['id']?>" ><?php echo $article[4]['titre'];?></a>
            </div>
        </div>
    </div> 
<?php } ?>
<?php
$sql = "SELECT * FROM campus_actus ORDER BY  date DESC";
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC);
if (isset($_SESSION['user'])) { 
    $user = $_SESSION['user'];
} {?>
    <div class="row col s12 l12">
        <div id="camp" class="title col s10 l10 offset-s1 offset-l2">
            <h2>Infos du campus</h2>
        </div>
        <div>
            <div class="col s10 l2 offset-s1 offset-l2 ">
                <img src="<?php echo $article[1]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[1]['id']?>" ><?php echo $article[1]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[2]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[2]['id']?>" ><?php echo $article[2]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[3]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[3]['id']?>" ><?php echo $article[3]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[4]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[4]['id']?>" ><?php echo $article[4]['titre'];?></a>
            </div>
        </div>
    </div>
<?php } ?>
<?php
$sql = "SELECT * FROM vie_associative ORDER BY  date DESC";
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC);
if (isset($_SESSION['user'])) { 
    $user = $_SESSION['user'];
} {?>
    <div class="row col s12 l12">
        <div id="vie" class="title col s10 l10 offset-s1 offset-l2">
            <h2>Vie Associative</h2>
        </div>
        <div>
            <div class="col s10 l2 offset-s1 offset-l2 ">
                <img src="<?php echo $article[1]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[1]['id']?>" ><?php echo $article[1]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[2]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[2]['id']?>" ><?php echo $article[2]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[3]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[3]['id']?>" ><?php echo $article[3]['titre'];?></a>
            </div>
            <div class="col s10 l2 offset-s1 offset-l0.5 ">
            <img src="<?php echo $article[4]['img1']; ?>">
                <a href="article.php?id=<?php echo $article[4]['id']?>" ><?php echo $article[4]['titre'];?></a>
            </div>
        </div>
    </div> 
</div>   
<?php }?>
<?php require_once "composant/footer.php";?>
