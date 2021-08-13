<?php
session_start();
require_once "./dbConfig/dbCreate.php";
require_once "./dbConfig/tableCreate.php";

if (!$_SESSION) {
    header('location:./connect/connexion.php');
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
    <link rel="stylesheet" href="./ressources/css/bootstrap.min.css">
    <link rel="stylesheet" href="./ressources/css/app.css">
    <!-- JS -->
    <script src="./ressourses/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg01 ">
    <header class="container py-5 bg02 border01">
        <div class="row justify-content-evenly ">
            <div class="col-lg-6 text-center">
                <img class=img-fluid src="./ressources/img/pokemon.png" alt="">
                <a class="btn btn-outline-primary" href="./connect/deconnexion.php">Déconnection</a>
            </div>
        </div>
    </header>
    <main class="container mt-3 py-5 bg02 border01">
        <div class="row justify-content-evenly mb-3">
            <div class="col-5 fs-3 border border-primary text-center p-2 rounded-pill bg-light">
                <?php echo $_SESSION['pseudo']; ?>
                <br>
                <?php echo $_SESSION['type']; ?>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php
                if ($_SESSION['type'] != "Trainer") {
                    include "./pokemon/pokemonList.php";
                    include "./pokemon/charged_attacks/chargedattacksList.php";
                    include "./pokemon/immediate_attacks/immediateattacksList.php";
                    include "./pokemon/types/typesList.php";
                    include "./pokemon/sexs/sexsList.php";
                }
                else {
                    include "./pokemon_caught/pokemoncaughtList.php";
                }
            ?>
        </div>
    </main>
</body>

</html>