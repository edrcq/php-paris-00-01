<?php 
// Config PHP - Show Errors
ini_set('display_errors', 1);
// Session Start - Use Cookies to know who is the user
session_start();

// MySQL Credentials
$mysql_user = 'exo';
$mysql_password = 'exopassword';

// Require le fichier db et inclus la variable $db
require_once __DIR__ . '/db.php';

// used for relative href
$folder_uri = dirname($_SERVER['REQUEST_URI']);

// Test
$config = [
    'key1' => 'value1'
];
