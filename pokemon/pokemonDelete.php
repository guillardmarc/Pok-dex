<?php

$id = $_GET['id'];

try{
   $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = "DELETE FROM pokemons WHERE idPokemons= $id";
   $sth = $pdo->prepare($sql);
   $sth->execute();

 }
   catch(PDOException $e){
   echo "Erreur : " . $e->getMessage();
 }
  header('location:../index.php');