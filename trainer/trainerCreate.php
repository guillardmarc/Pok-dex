<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_POST) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
            $type = "Trainer";
            
            if ($password == $confirmpassword) {
                // Hachage du mot de passe
                $password_hache = password_hash($password, PASSWORD_DEFAULT);
            }

            $req1 = $pdo->prepare("
                INSERT INTO trainer(pseudoTrainer,passwordTrainer,emailTrainer, typeTrainer)
                VALUES (:pseudo,:password,:email,:type)
            ");
    
            $req1->execute(array(
                ':pseudo' => $pseudo,
                ':password' => $password_hache,
                ':email' => $email,
                ':type' => $type,
            ));
            echo "ok";
            header('location:../index.php');
        }
    }
    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }