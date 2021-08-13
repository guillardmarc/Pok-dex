<?php
    session_start();

    if (!$_SESSION) {
        header('location:./connect/connexion.php');
    }
    if ($_GET) {
        $id = $_GET['id'];
        $pdo = new PDO(
            'mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $req1 = $pdo->prepare("SELECT * FROM charged_attacks where idChargedAttacks = $id");
        $req1->execute();
        $ChargedAttacks = $req1->fetch();

        $link = "chargedattacksUpdate.php?id=$id";
    }

    else {
        $link = "./chargedattacksCreate.php";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../ressources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../ressources/css/app.css">
    <!-- JS -->
    <script src="../../ressourses/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg01">
    <header class="container bg02">
        <div class="row justify-content-evenly ">
            <div class="col-lg-6"> <img class=img-fluid src="../../ressources/img/pokemon.png" alt=""> </div>
        </div>
    </header>
    <main class="container py-5 bg02">
        <section>
            <form action="<?php echo $link; ?>" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Nom
                    </span>
                    <input name="nameChargedAttacks" type="text" class="form-control" placeholder="Nom de l'attaque" value="<?php if ($_GET) {echo $ChargedAttacks['nameChargedAttacks'];} ?>">
                </div>
                <input class="btn btn-lg btn-primary" type="submit" value="Enregistrer">
                <a class="btn btn-lg btn-outline-primary" href="../../index.php">Retour</a>
            </form>
        </section>
    </main>
</body>
</html>