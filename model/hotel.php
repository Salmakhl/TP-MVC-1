<?php

function db_conx(){
  return new PDO('mysql:host=localhost; dbname=test','root','');
}

function liste_hotel(){
    $connexion= db_conx();
    $requet  = $connexion ->query("SELECT id_hotel  , titre, adresse,nbre_etoile FROM h ;");
    return $requet;
}
?>
