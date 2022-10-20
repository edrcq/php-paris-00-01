<?php
/**
 * Envoyer un formulaire sur la meme page.
 */
require_once __DIR__ .'/init/config.php';

$pageTitle = "Home";

require __DIR__ . "/inc/head.inc.php";

$loginForm = false;
$loginError = false;
if (isset($_POST['username'])) {
    $loginForm = true;
    if (strlen($_POST['username']) < 5) {
        $loginError = "Username is too short";
    } else {
        $_SESSION['username'] = $_POST['username'];
    }
}
?>
<body>
    <?php require __DIR__ . "/inc/nav.inc.php"; ?>

    <div>
        <h1><?= $pageTitle ?></h1>
        <h2>Formulaire envoye sur la meme page</h2>

        <h3>Connectez-vous</h3>
        <?php 
        if ($loginForm && !$loginError) { ?>
        <p>Connected with username : <?= $_SESSION['username']; ?></p>
        <?php
        } elseif ($loginForm && $loginError) { ?>
        <p>Erreur : <?= $loginError; ?></p>
        <?php
        }
        ?>
        <form action="login.php" method="POST">
            Username : <input type="text" name="username" />
            <button type="submit">Se connecter</button>
        </form>
    </div>

    <?php require __DIR__ . "/inc/footer.inc.php"; ?>

</body>
</html>