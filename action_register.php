<?php
require_once __DIR__ .'/init/config.php';

if (isset($_POST['username'])) {
   // $_SESSION['username'] = $_POST['username'];
   $prepsql = $db->prepare('SELECT * FROM users WHERE username = ?');
   $prepsql->execute([$_POST['username']]);

   $users = $prepsql->fetchAll();

   // si utilisateur a ete trouver, redirect, ne pas continuer register
   if (count($users) > 0) {
      header('Location: index.php');
      die();
   }

   // si aucun user a ete trouve
   $stm = $db->prepare('INSERT INTO users(username) VALUES(?)');
   $stm->execute([$_POST['username']]);
   
   $id = $db->lastInsertId();

   $_SESSION['registered'] = true;

}

header('Location: /test/index.php');

?>