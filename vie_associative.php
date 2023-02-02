<?php require_once "composant/menu.php";
if (!isset($_SESSION['user'])) {
    header('location:connexion.php');
} ?>
<?php
$sql = "SELECT * FROM vie_associative WHERE id=" . $_GET['id'];
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC); ?>


<div class="article row">
    <div class="title col s11 m10 l8 offset-s1 offset-m2 offset-l2">
        <h2>
            <b> <!--titre de la page-->
                <?php echo $article[0]['titre'] ?>
            </b>
        </h2>
    </div>
</div>

<div class="article row">
    <div class="col s12 m12 l12">
        <div class="col s10 m5 l6 offset-s1 offset-m1 offset-l1">
            <img src="<?php echo $article[0]['img1'] ?>" alt="image 1 de l'article">
        </div>
        <div class="col s10 m5 l2 offset-s1">
            <p id="p1"><?php echo $article[0]['P1'] ?></p>
        </div>
    </div>
    <!--premieres image et paragraphe de la page-->

    <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 ">
        <p><?php echo $article[0]['P2'] ?></p>
    </div>
    <!--2eme paragraphe de la page-->

    <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
        <img src="<?php echo $article[0]['img2'] ?>" alt="image 2 de l'article">
    </div>
    <!--2eme image de la page-->

</div>

<?php require_once "composant/footer.php"; ?>