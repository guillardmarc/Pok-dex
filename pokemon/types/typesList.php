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

    $req3 = $pdo->prepare("SELECT * FROM types");
    $req3->execute();
    $Types = $req3->fetchAll(PDO::FETCH_ASSOC);
}
?>
<section class="col-lg-6 p-2">
    <table class="table table-sm bg-light">
        <thead>
            <th>Badge</th>
            <th>Nom</th>
            <th colspan="2">
                <a class="btn btn-outline-primary" href="./pokemon/types/typesType.php">Ajouter un Type</a>
            </th>
        </thead>
        <tbody>
            <?php
            foreach ($Types as $key => $value) {
            ?>
                <tr>
                    <td><img src="./pokemon/types/upload/<?php echo $value['imgType'] ?>" width=150 height=100></td>
                    <td><?php echo $value['nameType'] ?></td>
                    <td><a class="text-danger" href="./pokemon/types/typesDelete.php?id=<?php echo $value['idType'] ?>"><i class="far fa-trash-alt"></i></a></td>
                    <td><a class="text-warning" href="./pokemon/types/typesType.php?id=<?php echo $value['idType'] ?>"><i class="far fa-edit"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>