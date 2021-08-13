<?php
    try {
        $id = $_GET['id'];
        var_dump($id);
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM charged_attacks WHERE idChargedAttacks = $id";
        var_dump($sql);
        $sth = $pdo->prepare($sql);
        $sth->execute();

        header('location:../../index.php');
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }