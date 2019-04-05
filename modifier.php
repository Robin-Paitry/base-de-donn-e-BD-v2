<?php
require_once ('../common/connectionBase.php');//créer une conexion à la base de donnée

    $serie= $_POST['serie'];
    $titre=$_POST['titre'];
    $tome = $_POST['tome'];
    $auteur = $_POST['auteur'];
//    $id = $_POST['id'];

    $stmt = $connection->prepare("UPDATE `bd` SET `serie` = :serie, `titre` = :titre, `tome` = :tome, `auteur`= :auteur WHERE `bd`.`id` = '$id';");

    $stmt->bindParam(':serie', $serie);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':tome', $tome);
    $stmt->bindParam(':auteur', $auteur);


    $stmt->execute();

    require_once ('../common/redirection.php');
    redirection('accueil');

