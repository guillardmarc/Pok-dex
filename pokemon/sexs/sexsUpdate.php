<?php
$id = $_GET['id'];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_POST) {
            $nameSex = htmlspecialchars($_POST['nameSex']);
            
            $req1 = $pdo->prepare("UPDATE sex 
                            SET nameSex = :nameSex
                            WHERE idSex = $id");
            $req1->execute(array(
                ':nameSex' => $nameSex
            ));
            header('location:../../index.php');
        }
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}