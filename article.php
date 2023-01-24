<?php require_once "composant/menu.php";?>
<?php
$sql = "SELECT * FROM article WHERE id=['id']";
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC);?>
<body>

<div class="row">
    <div class="col s11 l6 offset-s1 offset-l1">
        <h2>
            <?php echo $article[0]['titre'] ?>
        </h2>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="col s11 l5 offset-l1 offset-s1">
            <img src="<?php echo $article[0]['img1'] ?>">
        </div>
        <div class="col s11 l5 offset-l1 offset-s1"> 
            <p><?php echo $article[0]['P1'] ?></p>
        </div>
    </div>

    <div class="col s12 l11 offset-l1"> 
        <p><?php echo $article[0]['P2'] ?></p>
    </div>
    
    <div class="col s12 l11 offset-l1">
        <img src="<?php echo $article[0]['img2'] ?>">
    </div>

</div>


<?php require_once "composant/footer.php";?>