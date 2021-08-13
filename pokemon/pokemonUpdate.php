<?php
$id = $_GET['id'];
$pdo = new PDO(
    'mysql:host=localhost;dbname=pokedex;port=3306',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$req1 = $pdo->prepare("SELECT * FROM pokemons where idPokemons = $id");
$req1->execute();
$pokemons = $req1->fetch();





if ($_POST) {
    $numberPokemons = $_POST['numberPokemons'];
    $namePokemons = $_POST['namePokemons'];
    $descriptionPokemons = $_POST['descriptionPokemons'];
    $maxweightPokemons = $_POST['maxweightPokemons'];
    $maxsizePokemons = $_POST['maxsizePokemons'];
    $idImmediateAttacks = $_POST['idImmediateAttacks'];
    $idChargedAttacks = $_POST['idChargedAttacks'];
    $idTypes = $_POST['idTypes'];
    


    $req2 = $pdo->prepare("UPDATE `pokemons` 
                       SET `numberPokemons`= :numberPokemons,`namePokemons`= :namePokemons,`descriptionPokemons`= :descriptionPokemons,
                       `maxweightPokemons`= :maxweightPokemons,`maxsizePokemons`= :maxsizePokemons,`idImmediateAttacks`= :idImmediateAttacks,
                       `idChargedAttacks`= :idChargedAttacks,`idTypes`= :idTypes
                       WHERE idPokemons = $id");

    $req2->execute(array(
    ':numberPokemons' => $numberPokemons,
    ':namePokemons' => $namePokemons,
    ':descriptionPokemons' => $descriptionPokemons,
    ':maxweightPokemons' => $maxweightPokemons,
    ':maxsizePokemons' => $maxsizePokemons,
    ':idImmediateAttacks' => $idImmediateAttacks,
    ':idChargedAttacks' => $idChargedAttacks,
    ':idTypes' => $idTypes,
    
    ));
    header('location:../index.php');
}
