<?php
require_once __DIR__ .'/init/config.php';

$pageTitle = "Home";

require __DIR__ . "/inc/head.inc.php";
?>
<body>
    <?php require __DIR__ . "/inc/nav.inc.php"; ?>

    <div>
        <h1><?= $pageTitle ?></h1>
        <h2>Les sessions</h2>

        <h3>Connectez-vous</h3>
        <form action="action_login.php" method="POST">
            Username : <input type="text" name="username" />
            <button type="submit">Se connecter</button>
        </form>

        <h3>S'inscire</h3>
        <?php
        if (isset($_SESSION['registered'])) {
            unset($_SESSION['registered']);
        ?>
            <p style="background-color: green; font-weight: 900;">
                User registered
            </p>
        <?php } ?>
        <form action="action_register.php" method="POST">
            Username : <input type="text" name="username" />
            <button type="submit">S'inscire</button>
        </form>
    </div>

    <?php require __DIR__ . "/inc/footer.inc.php"; ?>

</body>
</html>