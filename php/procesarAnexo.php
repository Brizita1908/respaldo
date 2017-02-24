<?php
include 'conexionBdd.php';

if($_POST){
    //Pago
    $idPago = htmlentities($_POST['idPago']);
    $idRamo = htmlentities($_POST['idRamo']);
    $idPoliza = htmlentities($_POST['idPoliza']);
    $numeroAnexo = htmlentities($_POST['numeroAnexo']);
    $inicioVigenciaAnexo =  htmlentities($_POST['inicioVigenciaAnexo']); 
    $finVigenciaAnexo = htmlentities($_POST['finVigenciaAnexo']);
    $valorTotalAseguradoAnexo = htmlentities($_POST['valorTotalAseguradoAnexo']);

    $query= "INSERT INTO anexo(idPago,idRamo,idPoliza,numeroAnexo,inicioVigenciaAnexo,finVigenciaAnexo,valorTotalAseguradoAnexo) VALUES ('$idPago','$idRamo','$idPoliza','$numeroAnexo','$inicioVigenciaAnexo','$finVigenciaAnexo','$valorTotalAseguradoAnexo')";

    $result=$conn->query($query);

    if(!$result){
      $res = 'Existio un error al insertar.' . $conn->error;
    }else {
      $res = 'Anexo registrado con exito';
    }
}

echo json_encode( $res );

?>