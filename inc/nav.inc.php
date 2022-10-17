<nav>
    <ul>
        <li><a href="/test/index.php">Home</a></li>
        <li><a href="/test/page1.php">Page 1</a></li>
        <li>Lien 2</li>
        <?php if (isset($_SESSION['username'])) { ?>
            <li><a href="/test/logout.php">Logout</a></li>
        <?php } ?>
    </ul>
</nav>