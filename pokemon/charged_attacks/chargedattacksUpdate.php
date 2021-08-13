<?php
$id = $_GET['id'];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_POST) {
            $nameChargedAttacks = htmlspecialchars($_POST['nameChargedAttacks']);
            
            $req1 = $pdo->prepare("UPDATE charged_attacks 
                            SET nameChargedAttacks = :nameChargedAttacks
                            WHERE idChargedAttacks = $id");
            $req1->execute(array(
                ':nameChargedAttacks' => $nameChargedAttacks
            ));
            header('location:../../index.php');
        }
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}