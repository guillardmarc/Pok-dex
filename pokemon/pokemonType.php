<?php
session_start();

if (!$_SESSION) {
    header('location:./connect/connexion.php');
}

if ($_GET) {
    $id = $_GET['id'];
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pokedex;port=3306',
        'root',
        '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req1 = $pdo->prepare("SELECT * FROM pokemons where idPokemons = $id");
    $req1->execute();
    $pokemons = $req1->fetch();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req1 = $pdo->prepare("SELECT * FROM immediate_attacks");
    $req1->execute();
    $ImmediateAttacks = $req1->fetchAll(PDO::FETCH_ASSOC);

    $req2 = $pdo->prepare("SELECT * FROM charged_attacks");
    $req2->execute();
    $ChargedAttacks = $req2->fetchAll(PDO::FETCH_ASSOC);

    $req3 = $pdo->prepare("SELECT * FROM types");
    $req3->execute();
    $Types = $req3->fetchAll(PDO::FETCH_ASSOC);

    $link = "pokemonUpdate.php?id=$id";
} else {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pokedex;port=3306',
        'root',
        '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req1 = $pdo->prepare("SELECT * FROM immediate_attacks");
    $req1->execute();
    $ImmediateAttacks = $req1->fetchAll(PDO::FETCH_ASSOC);

    $req2 = $pdo->prepare("SELECT * FROM charged_attacks");
    $req2->execute();
    $ChargedAttacks = $req2->fetchAll(PDO::FETCH_ASSOC);

    $req3 = $pdo->prepare("SELECT * FROM types");
    $req3->execute();
    $Types = $req3->fetchAll(PDO::FETCH_ASSOC);

    $link = "pokemonCreate.php";
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
    <link rel="stylesheet" href="../ressources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ressources/css/app.css">
    <!-- JS -->
    <script src="../ressourses/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg01">
    <header class="container bg02">
        <div class="row justify-content-evenly ">
            <div class="col-lg-6"> <img class=img-fluid src="../ressources/img/pokemon.png" alt=""> </div>
        </div>
    </header>
    <main class="container py-5 bg02">
        <section>
            <form action="<?php echo $link; ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Numéro
                    </span>
                    <input name="numberPokemons" type="number" class="form-control" placeholder="Numéro du Pokemon" value="<?php if ($_GET) {echo  $pokemons['numberPokemons'];} ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Nom
                    </span>
                    <input name="namePokemons" type="text" class="form-control" placeholder="Nom du Pokemon" value="<?php if ($_GET) {echo  $pokemons['namePokemons'];} ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Description du Pokemon</span>
                    <textarea name="descriptionPokemons" class="form-control" aria-label="With textarea"><?php if ($_GET) {echo  $pokemons['descriptionPokemons'];} ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Poids
                    </span>
                    <input name="maxweightPokemons" type="number" class="form-control" placeholder="Poids max du Pokemon" value="<?php if ($_GET) {echo  $pokemons['maxweightPokemons'];} ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Taille
                    </span>
                    <input name="maxsizePokemons" type="number" class="form-control" placeholder="Taille max du Pokemon" value="<?php if ($_GET) {echo  $pokemons['maxsizePokemons'];} ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Attaque immédiate
                    </span>
                    <select class="form-control" name="idImmediateAttacks">
                        <option>---</option>
                        <?php
                        foreach ($ImmediateAttacks as $key => $value) { ?>
                            <option value="<?php echo $value['idImmediateAttacks'] ?>"><?php echo $value['nameImmediateAttacks'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Attaque charger
                    </span>
                    <select class="form-control" name="idChargedAttacks">
                        <option>---</option>
                        <?php
                        foreach ($ChargedAttacks as $key => $value) { ?>
                            <option value="<?php echo $value['idChargedAttacks'] ?>"><?php echo $value['nameChargedAttacks'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Type
                    </span>
                    <select class="form-control" name="idTypes">
                        <option>----</option>
                        <?php
                        foreach ($Types as $key => $value) { ?>
                            <option value="<?php echo $value['idType'] ?>"><?php echo $value['nameType'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Photo
                    </span>
                    <input class="form-control" type="file" name="image">
                </div>
                <input class="btn btn-lg btn-primary mx-auto" type="submit" value="Enregister le Pokemon">
                <a class="btn btn-lg btn-outline-primary" href="../index.php">Retour</a>
            </form>
        </section>
    </main>
</body>

</html>