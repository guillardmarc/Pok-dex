<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=pokedex;port=3306',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$req0 = $pdo->prepare("SELECT * FROM pokemons ORDER BY numberPokemons");
$req0->execute();
$Pokemons = $req0->fetchAll(PDO::FETCH_ASSOC);

$req1 = $pdo->prepare("SELECT * FROM immediate_attacks");
$req1->execute();
$ImmediateAttacks = $req1->fetchAll(PDO::FETCH_ASSOC);

$req2 = $pdo->prepare("SELECT * FROM charged_attacks");
$req2->execute();
$ChargedAttacks = $req2->fetchAll(PDO::FETCH_ASSOC);

$req3 = $pdo->prepare("SELECT * FROM types");
$req3->execute();
$Types = $req3->fetchAll(PDO::FETCH_ASSOC);
?>
<section>
    <div class="container">
        <div class="row">
            <?php
            foreach ($Pokemons as $key => $Pokemon) {
            ?>
                <div class="col-lg-3">
                    <a href="" class="card text-reset text-center mb-3  border02">
                        <div class="card-header row">
                            <div class="col-2 rounded-circle m-2 bg-warning">
                                <?php echo $Pokemon['numberPokemons']; ?>
                            </div>
                            <div class="card-text col-8">
                                <?php echo $Pokemon['namePokemons']; ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="./pokemon/uploads/<?php echo $Pokemon['imgPokemons']; ?>" alt="">
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>