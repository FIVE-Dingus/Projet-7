<?php require_once "composant/menu.php"; ?>

<div class="row">
    <div class="col l6">
        <h1>Liste des Users</h1>
        <?php
        $commande = "SELECT * FROM user";
        $prepar = $pdo->prepare($commande);
        $prepar->execute();
        $data = $prepar->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $user){
        ?>
        <form method='post' action='action/update_user.php'>
            <h3><?php echo $user['username'] ?></h3>
            <label for="#username">Le pseudo</label>
            <input id="username" type='text' name='username' value="<?php echo $user['username'] ?>">
            <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
            <input type='submit' value='update' />
        </form>
        <form method='post' action='action/delete_user.php'>
            
            <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
            <input type='submit' value='suprimer' />
            </form>

        <?php }?>
    </div>
    <div class="col l6">        
        <?php 
        $sql = "SELECT * FROM article";
        $pre = $pdo->prepare($sql);
        $pre ->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $article){
            ?>
        <h2>Liste de tout les articles</h2>
        <form method='post' action='action/update_article.php'>
            <h3><?php echo $article['titre'] ?></h3>
            <label for="#username">Le titre</label>
            <input id="username" type='text' name='titre' value="<?php echo $article['titre'] ?>">
            <input type="hidden" value="<?php echo $article['id'] ?>" name="id">
            <input type='submit' value='update' />
        </form>
        <form method='post' action='action/delete_article.php'>
            
            <input type="hidden" value="<?php echo $article['id'] ?>" name="id">
            <input type='submit' value='suprimer' />
            </form>

        <?php }?>
    </div>
</div>
<form method="post" action="action/add_arcticle.php" enctype="multipart/form-data">
    <label for="#titre">titre</label>
    <input id="titre" type='title' name='titre'>
    <label for="#img1">première imagede l'article</label>
    <input id="img1" type='file' name='img1'>
    <label for="#img2"></label>
    <input id="img2" type='file' name='img2'>
    <label for="#P1">Paragraphe n°1</label>
    <input id="P1" type='text' name='P1'>
    <label for="#P2">Paragraphe n°2</label>
    <input id="P2" type='text' name='P2'>
    <input type='submit' value='Créer l article' />
</form>
<?php require_once "composant/footer.php";?>