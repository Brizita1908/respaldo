<?php
include 'conexionBdd.php';

if($_POST){
    //Poliza
    $nropoliza = htmlentities($_POST['nropoliza']);
    $idcliente = htmlentities($_POST['idcliente']);
    $idaseguradora = htmlentities($_POST['idaseguradora']);

    $query= "INSERT INTO poliza(idAseguradora,idCliente,numeroPoliza) VALUES ('$idaseguradora','$idcliente','$nropoliza')";

    $result=$conn->query($query);

    if(!$result){
      $res = 'Existio un error al insertar.' . $conn->error;
    }else {
      $query = "SELECT MAX(idPoliza) as idPoliza FROM poliza";
      $result = $conn ->query($query);
      if (!$result) die($conn ->error);
      $result ->data_seek(0);
      $res = $result ->fetch_array(MYSQLI_ASSOC);
      $res = intval($res['idPoliza']);
    }
}

echo json_encode($res);

?>