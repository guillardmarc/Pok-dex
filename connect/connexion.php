<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../ressources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ressources/css/app.css">
    <!-- JS -->
    <script src="../ressources/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg01 bodyConnexion">
    <main class="container bg02 py-5  border01">
        <div class="row justify-content-evenly ">
            <div class="col-lg-6"> <img class=img-fluid src="../ressources/img/pokemon.png" alt=""> </div>
        </div>
        <div class="row justify-content-evenly">
            <section class="col-lg-5">
                <form class="m-2 p-2" action="loginVerif.php" method="POST">
                    <h1 class="h3 mb-3 text-center">Connection</h1>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Pseudo
                        </span>
                        <input name="pseudo" type="text" class="form-control" placeholder="Ici mon pseudo">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Mot de passe
                        </span>
                        <input name="password" type="password" class="form-control" placeholder="Ici mon mot de passe">
                    </div>
                    <input class="btn btn-lg btn-primary" type="submit" value="Me connecter">
                </form>
            </section>
            <section class="col-lg-5">
                <form class="m-2 p-2" action="../trainer/trainerCreate.php" method="POST">
                    <h1 class="h3 mb-3 text-center">Créer un compte</h1>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Pseudo
                        </span>
                        <input name="pseudo" type="text" class="form-control" placeholder="Ici mon pseudo">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Email
                        </span>
                        <input name="email" type="text" class="form-control" placeholder="Ici mon email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Mot de passe
                        </span>
                        <input name="password" type="password" class="form-control" placeholder="Ici mon mot de passe">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Mot de passe
                        </span>
                        <input name="confirmpassword" type="password" class="form-control" placeholder="Ici mon mot de passe">
                    </div>
                    <input class="btn btn-lg btn-primary" type="submit" value="Me connecter">
                </form>
            </section>
        </div>
    </main>
</body>

</html>