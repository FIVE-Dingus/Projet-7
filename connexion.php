<?php
require_once "composant/menu.php";
require_once "vendor/autoload.php";

if (isset($_SESSION['user'])) {
    header('location:index.php');
}

echo "<div class='connexion row'>
        <div class='title col s12'>";
if (!empty($_POST['credential'])) {


    if (empty($_COOKIE['g_csrf_token']) || empty($_POST['g_csrf_token']) || $_COOKIE['g_csrf_token'] != $_POST['g_csrf_token']) {
        echo "Erreur verification jeton CSRF";
        exit();
    }

    $CLIENT_ID = "191504532339-afernn1nkoggl6rcvunsp3roi4dvv57h.apps.googleusercontent.com";
    $client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
    $id_token = $_POST['credential'];
    $user = $client->verifyIdToken($id_token);
    if ($user) {
        $_SESSION['user'] = $user;
        $lol = "SELECT email FROM user WHERE email='" . $_SESSION['user']['email'] . "'";
        $fun = $pdo->prepare($lol);
        $fun->execute();
        $connect = $fun->fetchAll(PDO::FETCH_ASSOC);
        $count = $fun->rowCount();
            if ($count == 0) {
                $sql = "INSERT INTO user(email) VALUES(:email)";
                $dataBinded = array(
                    ':email'   => $_SESSION['user']['email']
                );
                $pre = $pdo->prepare($sql);
                $pre->execute($dataBinded);
            } else {
                
            }; //fin de la boucle
        header('location:index.php');

        exit();
    }
}

if (!isset($_SESSION['user'])) {
    echo " <div class='col s10 l4 offset-s1 offset-l2'>
                    <img src='Img/GC_connexion.jpeg' alt=''>
                </div>
                <div class='col s10 l3 offset-s1 offset-1'>
                    <h1 style='text-align: center'>Connexion</h1>
                    <p style='text-align: center'>Ce site est réservé aux membres du Gaming Campus. 
                    Veuillez vous connecter avec votre compte Google / Gaming Campus</p>
                        <div id='g_id_onload'
                            data-client_id='191504532339-afernn1nkoggl6rcvunsp3roi4dvv57h.apps.googleusercontent.com'
                            data-context='signin'
                            data-ux_mode='popup'
                            data-login_uri='http://localhost/Projet7/connexion.php'
                            data-auto_prompt='false'>
                        </div>

                <div class='g_id_signin'
                    data-type='standard'
                    data-shape='pill'
                    data-theme='filled_black'
                    data-text='signin_with'
                    data-size='large'
                    data-locale='fr'
                    data-logo_alignment='left'>
                </div>
            </div>";
} else {
}

?>

<script src="https://accounts.google.com/gsi/client" async defer></script>


</div>
</div>

<?php require_once "composant/footer.php"; ?>