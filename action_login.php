<?php
require_once __DIR__ .'/init/config.php';

// $_POST['tel']

if (isset($_POST['username'])) {
   $_SESSION['username'] = $_POST['username'];
}

header('Location: /test/page1.php');

?>