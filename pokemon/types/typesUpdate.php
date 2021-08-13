<?php
$id = $_GET['id'];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_POST) {
            $nameType = htmlspecialchars($_POST['nameType']);
            
            $req1 = $pdo->prepare("UPDATE types 
                            SET nameType = :nameType
                            WHERE idType = $id");
            $req1->execute(array(
                ':nameType' => $nameType
            ));
            header('location:../../index.php');
        }
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}