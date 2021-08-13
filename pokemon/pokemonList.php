<?php
if ($_GET) {
} else {
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
}
?>
<section class="col-lg-12 p-2">
    <div class="table-responsive">
        <table class="table table-sm bg-light">
            <thead>
                <th></th>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Attaque Immediate</th>
                <th>Attaque Charger</th>
                <th>Type</th>
                <th colspan="2">
                    <a class="btn btn-outline-primary" href="./pokemon/pokemonType.php">Ajouter un Pokemon</a>
                </th>
            </thead>
            <tbody>
                <?php
                foreach ($Pokemons as $key => $value) {
                ?>
                    <tr>
                        <td><img src="./pokemon/uploads/<?php echo $value['imgPokemons'] ?>" width=150 height=100></td>
                        <td><?php echo $value['numberPokemons'] ?></td>
                        <td><?php echo $value['namePokemons'] ?></td>
                        <td><?php echo $value['descriptionPokemons'] ?></td>
                        <td><?php echo $value['maxweightPokemons'] ?> Kg</td>
                        <td><?php echo $value['maxsizePokemons'] ?> m</td>
                        <td>
                            <?php  
                                foreach ($ImmediateAttacks as $key => $ImmediateAttack) {
                                    if ($value['idImmediateAttacks'] == $ImmediateAttack['idImmediateAttacks']) {
                                        echo $ImmediateAttack['nameImmediateAttacks'];
                                    }
                                } 
                            ?>
                        </td>
                        <td>
                            <?php  
                                foreach ($ChargedAttacks as $key => $ChargedAttack) {
                                    if ($value['idChargedAttacks'] == $ChargedAttack['idChargedAttacks']) {
                                        echo $ChargedAttack['nameChargedAttacks'];
                                    }
                                } 
                            ?>
                        </td>
                        <td>
                            <?php  
                                foreach ($Types as $key => $Type) {
                                    if ($value['idTypes'] == $Type['idType']) {?>
                                        <img src="./pokemon/types/upload/<?php echo $Type['imgType'] ?>" width=150 height=100>
                                    <?php
                                    }
                                } 
                            ?>
                        </td>
                        <td><a class="text-danger" href="./pokemon/pokemonDelete.php?id=<?php echo $value['idPokemons'] ?>"><i class="far fa-trash-alt"></i></a></td>
                        <td><a class="text-warning" href="./pokemon/pokemonType.php?id=<?php echo $value['idPokemons'] ?>"><i class="far fa-edit"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>