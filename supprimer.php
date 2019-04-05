<?php
require_once ('../common/connectionBase.php');//créer une conexion à la base de donnée

$id = $_GET['id'];

$stmt = $connection->prepare("DELETE FROM `bd` WHERE `bd`.`id`=:id;");
$stmt->bindParam ( ':id', $id);
$stmt->execute();

