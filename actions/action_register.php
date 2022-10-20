<?php
/**
 * Cette action est une page blanche invisible pour l'utilisateur,
 * il se fera automatiquement redirige vers la page sur laquelle il a envoye le formulaire
 * 
 */
require_once __DIR__ .'/init/config.php';

if (isset($_POST['username'])) {
   // $_SESSION['username'] = $_POST['username'];
   $prepsql = $db->prepare('SELECT * FROM users WHERE username = ?');
   $prepsql->execute(array(
      $_POST['username']
   ));

   $users = $prepsql->fetchAll();

   // si un utilisateur a ete trouve, redirect, ne pas continuer register
   if (count($users) > 0) {
      header('Location: /test/index.php');
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