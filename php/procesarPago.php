<?php
include 'conexionBdd.php';

if($_POST){
    //Pago
    $tasaPago = htmlentities($_POST['tasaPago']);
    $primaPago = htmlentities($_POST['primaPago']);
    $porcentajeComisionPago = htmlentities($_POST['porcentajeComisionPago']);
    $metodoPago = htmlentities($_POST['metodoPago']);
    $numeroCuotas = intval(htmlentities($_POST['numeroCuotas']));
    $comisionPago = htmlentities($_POST['comisionPago']);

    $query= "INSERT INTO pago(tasaPago,primaPago,porcentajeComisionPago,metodoPago,numeroCuotas,comisionPago) VALUES ('$tasaPago','$primaPago','$porcentajeComisionPago','$metodoPago','$numeroCuotas','$comisionPago')";

    $result=$conn->query($query);

    if(!$result){
      $res = 'Existio un error al insertar.' . $conn->error;
    }else {

        $query = "SELECT MAX(idPago) as idPago FROM pago";
        $result = $conn ->query($query);
        if (!$result) die($conn ->error);
        $result ->data_seek(0);
        $res = $result ->fetch_array(MYSQLI_ASSOC);
        $res = intval($res['idPago']);
    }
}

echo json_encode( $res );

?>