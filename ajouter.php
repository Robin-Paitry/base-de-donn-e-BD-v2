<?php
require_once ('../common/connectionBase.php'); //créer une conexion à la base de donnée


$serie=$_POST['serie'];
$titre = $_POST['titre'];
$tome = $_POST['tome'];
$auteur = $_POST['auteur'];


$stmt = $connection->prepare("INSERT INTO `bd` (`serie`, `titre`, `tome`,`auteur`) VALUES (:serie, :titre, :tome, :auteur);");



$stmt->bindParam(':serie', $serie);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':tome', $tome);
$stmt->bindParam(':auteur', $auteur);

$stmt->execute();


echo'élement rajouté';

print("<table border=\"1\">");



