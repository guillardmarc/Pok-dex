<?php 
    if ($_POST) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        $pdo = new PDO(
            'mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = $pdo->prepare("SELECT * FROM trainer WHERE pseudoTrainer = :pseudo");
        $req->execute(array('pseudo' => $pseudo));
        $resultat = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base

        

        if (!$resultat)
        {
            
            echo 'Mauvais identifiant ou mot de passe !';
            //header('location:connexion.php');
        }
        else
        {
            $isPasswordCorrect = password_verify($password, $resultat['passwordTrainer']);
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['idTrainer'];
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['type'] = $resultat['typeTrainer'];
                echo 'Vous êtes connecté !';
    
                header('location:../index.php');
            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
                //header('location:connexion.php');
            }
        }

    }