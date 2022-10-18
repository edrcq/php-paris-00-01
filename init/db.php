<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=todos', $mysql_user, $mysql_password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
