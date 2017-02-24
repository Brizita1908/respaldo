<?php
include 'conexionBdd.php';

if($_POST){
    //Poliza
    $idMovimiento = htmlentities($_POST['idMovimiento']);
    $idUsuario = htmlentities($_POST['idUsuario']);
    $fechaEntrega = htmlentities($_POST['fechaEntrega']);
    $medioSolicitud = htmlentities($_POST['medioSolicitud']);
    $fechaSolicitud = htmlentities($_POST['fechaSolicitud']);
    $cartaFirmadaEntrega = htmlentities($_POST['cartaFirmadaEntrega']);
    $numeroCartaSolicitud = htmlentities($_POST['numeroCartaSolicitud']);
    $estadoTransaccion = htmlentities($_POST['estadoTransaccion']);

    $query= "INSERT INTO transaccion(idMovimiento,idUsuario,fechaEntrega,medioSolicitud,fechaSolicitud,cartaFirmadaEntrega,numeroCartaSolicitud,estadoTransaccion) VALUES ('$idMovimiento','$idUsuario','$fechaEntrega','$medioSolicitud','$fechaSolicitud','$cartaFirmadaEntrega','$numeroCartaSolicitud','$estadoTransaccion')";

    $result=$conn->query($query);

    if(!$result){
      $res = 'Existio un error al insertar.' . $conn->error;
    }else {
        $query= "SELECT * FROM transaccion ORDER BY `idTransaccion` DESC LIMIT 1";
        $result = $conn ->query($query);
        if (!$result) die($conn ->error);
        $result ->data_seek(0);
        $res = $result ->fetch_array(MYSQLI_ASSOC);
    }
}

echo json_encode($res);


?>