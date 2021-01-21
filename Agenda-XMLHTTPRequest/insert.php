<?php

require './conexion.php';


if ( isset($_POST['name'])) {
  $statament = Conexion::conectar()->prepare("INSERT INTO numeros (name, number) VALUES (:name, :number)");
  $statament->bindParam( ':name', $_POST['name'], PDO::PARAM_STR);
  $statament->bindParam( ':number', $_POST['number'], PDO::PARAM_STR);
  if ( $statament->execute() ) {
    echo json_encode ('ok');
  } else {
    echo json_encode ('fail');
  }
}