<?php
include 'conexionBdd.php';

if($_POST){
    //Poliza
    $idTransaccion = htmlentities($_POST['idTransaccion']);
    $idAnexo = htmlentities($_POST['idAnexo']);

    $query= "INSERT INTO transaccionanexo(idTransaccion,idAnexo) VALUES ('$idTransaccion','$idAnexo')";

    $result=$conn->query($query);

    if(!$result){
      $res = 'Existio un error al insertar.' . $conn->error;
    }else {
      $res = 'Transaccion registrada con exito';
    }
}

echo json_encode( $res );

?>