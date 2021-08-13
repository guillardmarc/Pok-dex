<?php 
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=pokedex;port=3306', 'root', '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $req1 = $pdo->prepare("SELECT * FROM charged_attacks");
        $req1->execute();
        $ChargedAttacks = $req1->fetchAll(PDO::FETCH_ASSOC);;
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>
<section class="col-lg-6 p-2">
    <table class="table table-sm bg-light">
        <thead>
            <tr>
                <th scope="col">Attaque chargée</th>
                <th colspan="2" scope="col">
                <a  class="btn btn-outline-primary" href="./pokemon/charged_attacks/chargedattacksType.php">Nouvelle attaque charger</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ChargedAttacks as $key => $value) {;?>
                <tr>
                    
                    <td><?php echo $value['nameChargedAttacks']; ?></td>
                    <td>
                        <a class="text-danger" href="./pokemon/sexs/sexsDelect.php?id=<?php echo $value['idChargedAttacks'];?>"><i class="far fa-trash-alt"></i></a>
                    </td>
                    <td>
                        <a class="text-warning" href="./pokemon/sexs/sexsType.php?id=<?php echo $value['idChargedAttacks'];?>"><i class="far fa-edit"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</section>