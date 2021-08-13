<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_POST) {
            $nameImmediateAttacks = htmlspecialchars($_POST['nameImmediateAttacks']);
            $req1 = $pdo->prepare("
                INSERT INTO immediate_attacks(nameImmediateAttacks)
                VALUES (:nameImmediateAttacks)
            ");
    
            $req1->execute(array(
                ':nameImmediateAttacks' =>$nameImmediateAttacks,
            ));
            header('location:../../index.php');
        }
    }
    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }