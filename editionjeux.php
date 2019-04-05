<?php

require_once ('../core/common/connectionBase.php');

$id=$_GET['id'];


$stmt = $connection->prepare("SELECT * FROM `bd` WHERE `bd`.`id` = :id ;");
$stmt->bindParam(':id', $id);
$stmt->execute();
$resultat = $stmt->fetchall();

foreach ($resultat as $item) {
$serie=$item['serie'];
$titre=$item['titre'];
$plateforme=$item['tome'];
$plateforme=$item['auteur'];
$id=$item['id'];
}


?>


<form action="../core/api/modifier.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">

    <label for="serie">serie:</label>
    <input type="text" name="serie" id="serie" value="<?=$serie?>">

    <label for="titre">titre:</label>
    <input type="text" name="titre" id="titre" value="<?=$titre?>">

    <label for="tome">tome:</label>
    <input type="text" name="tome" id="tome" value="<?=$tome?>">

    <label for="auteur">auteur:</label>
    <input type="text" name="auteur" id="auteur" value="<?=$auteur?>">

<!--    <label for="image">Image:</label>
    <input type="file" name="image" id="image">-->
    <input type="submit" value="modifier">

</form>