<?php

require './conexion.php';

$statement = Conexion::conectar()->prepare("SELECT * FROM numeros");
$statement->execute();

echo json_encode( $statement->fetchAll( PDO::FETCH_ASSOC ) );

$statement = null;