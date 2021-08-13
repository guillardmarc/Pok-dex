<?php
    try {
        $id = $_GET['id'];
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM immediate_attacks WHERE idImmediateAttacks = $id";
        $sth = $pdo->prepare($sql);
        $sth->execute();

        header('location:../../index.php');
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }