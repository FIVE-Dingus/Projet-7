<?php require_once "composant/menu.php"; ?>
<?php 
if (!isset($_SESSION['user']) || $_SESSION['user']['admin']==0){
    header('location: ../index.php');
}
?>
<h1>Liste des Users</h1>
<?php
$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user);
$sql = "SELECT * FROM article";
$pre = $pdo->prepare($sql);
$pre->execute();
$datas = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($datas as $article);{
?>
<form method='post' action='action/delete_user.php'>
    <h2><?php echo $user['username'] ?></h2>
    <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
    <input type='submit' value='suprimer' />
    </form>
<form method='post' action='action/update_user.php'>
    <label for="#username">Le pseudo</label>
    <input id="username" type='text' name='username' value="<?php echo $user['username'] ?>">
    <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
    <input type='submit' value='update' />
</form>
<form method='post' action='action/update_article.php'>
    <h3><?php echo $article['titre'] ?></h3>
    <input type="hidden" value="<?php echo $article['id'] ?>" name="id">
    <input type='submit' value='suprimer' />
    </form>
<form method='post' action='action/update_user.php'>
    <label for="#username">Le pseudo</label>
    <input id="username" type='text' name='username' value="<?php echo $article['titre'] ?>">
    <input type="hidden" value="<?php echo $article['id'] ?>" name="id">
    <input type='submit' value='update' />
</form>
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
<?php }?>
<?php require_once "composant/footer.php";?>