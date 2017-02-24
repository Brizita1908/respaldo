<?php
include 'conexionBdd.php';

if($_POST){
    //Poliza
    $nropoliza = htmlentities($_POST['nropoliza']);

    $query= "SELECT * FROM poliza WHERE numeroPoliza = '$nropoliza'";
    $result = $conn ->query($query);
    if (!$result) die($conn ->error);
    $result ->data_seek(0);
    $res = $result ->fetch_array(MYSQLI_ASSOC);
}

echo json_encode( $res );

?>