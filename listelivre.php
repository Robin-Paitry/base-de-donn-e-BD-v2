<?php
require_once ('../common/connectionBase.php');//créer une conexion à la base de donnée



$stmt = $connection->prepare("SELECT * FROM `bd`");
$stmt->execute();
$resultat = $stmt->fetchall();


echo json_encode ($resultat);


