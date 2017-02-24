<?php
include 'conexionBdd.php';

if($_POST){
    //Poliza
    $idPoliza = htmlentities($_POST['idPoliza']);

    $query= "SELECT * FROM anexo a JOIN ramo r ON a.idRamo = r.idRamo JOIN poliza p ON a.idPoliza = p.idPoliza WHERE a.idPoliza = '$idPoliza'";
    $result = $conn ->query($query);
    if (!$result) die($conn ->error);
    $rows = $result ->num_rows;
    $anexos = array();
    for ($i = 0 ; $i < $rows ; ++$i){
	  $result ->data_seek($i);
	  $anexos[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
	}

    if (empty($anexos)) 
    {
        $htmlAnexo="";
    }else
    {
        //Llenado de la cabezera de la tabla
        
        $htmlAnexo  = '<center><h4>Lista de Anexos Pertenecientes a la Poliza número '.$anexos[0]['numeroPoliza'].'</h4></center>';
        $htmlAnexo .= '<table class="table">';
        $htmlAnexo .= '<center><thead>';
        $htmlAnexo .= '<tr>';
        $htmlAnexo .= '<th></th>';
        $htmlAnexo .= '<th>numeroAnexo</th>';
        $htmlAnexo .= '<th>Ramo</th>';
        $htmlAnexo .= '<th>Inicio Vigencia</th>';
        $htmlAnexo .= '<th>Fin Vigencia</th>';
        $htmlAnexo .= '<th>Valor Total Asegurado</th>';
        $htmlAnexo .= '</tr>';
        $htmlAnexo .= '</thead></center>';
        $htmlAnexo .= '<tbody>';
        $contador = 1;
        foreach ($anexos as $anexo) {
            $htmlAnexo .= '<tr>';
            $htmlAnexo .= '<td><input type="checkbox" name="idAnexo" value="'.$anexo['idAnexo'].'"></input></td>';
            $htmlAnexo .= '<td>'.$anexo['numeroAnexo'].'</td>';
            $htmlAnexo .= '<td>'.$anexo['siglaRamo'].'</td>';
            $htmlAnexo .= '<td>'.$anexo['inicioVigenciaAnexo'].'</td>';
            $htmlAnexo .= '<td>'.$anexo['finVigenciaAnexo'].'</td>';
            $htmlAnexo .= '<td>'.$anexo['valorTotalAseguradoAnexo'].'</td>';
            $htmlAnexo .= '</tr>';
            $contador++;
          }
        $htmlAnexo .= '</tbody>';
        $htmlAnexo .= '</table>';

        }
}

echo $htmlAnexo;

?>