<?php
require_once __DIR__ .'/init/config.php';

$pageTitle = "Page 1";

// Include HEAD of HTML
require __DIR__ . "/inc/head.inc.php";
?>
<body>
    <?php /* Include NAV */
    require __DIR__ . "/inc/nav.inc.php"; ?>

    <div>
        <h1><?= $pageTitle ?></h1>
        <h2>Les sessions</h2>

        <?php if (isset($_SESSION['username'])) { ?>
        <h3>Vous etes : <?= $_SESSION['username'] ?></h3>
        <?php } else { ?>
        <p>NOT CONNECTED.<br />

        Retour a l'accueil <a href="/test/index.php">>> RETOUR <<</a></p>
        <?php } ?>
    </div>

    <?php /* Include Footer */
    require __DIR__ . "/inc/footer.inc.php"; ?>

</body>
</html>