<?php

try{
  $bdd = new PDO('mysql:host=localhost;dbname=puissance4', 'root', '');
}
catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
}
?>