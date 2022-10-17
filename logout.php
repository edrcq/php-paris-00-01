<?php 
require_once __DIR__ .'/init/config.php';

session_unset();
// session_reset();
session_destroy();

header('Location: /test/index.php');

?>