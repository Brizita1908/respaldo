<?php
include 'conexionBdd.php';

//Consulta de Transacciones
	$transaccion = "SELECT * FROM `transaccion` t JOIN `transaccionanexo` ta ON t.idTransaccion = ta.idTransaccion JOIN anexo a ON a.idAnexo = ta.idAnexo join pago p ON p.idPago = a.idPago JOIN poliza po on po.idPoliza = a.idPoliza JOIN usuarios u ON u.idUsuario = t.idUsuario JOIN aseguradora ase ON po.idAseguradora = ase.idAseguradora JOIN cliente c ON po.idCliente = c.idCliente JOIN ramo r ON a.idRamo = r.idRamo JOIN movimiento m ON t.idMovimiento = m.idMovimiento";

	$result = $conn ->query($transaccion);

	if (!$result) die($conn ->error);

    $rows = $result ->num_rows;
      
    $tran = array();

    for ($j = 0 ; $j < $rows ; ++$j){
    	$result ->data_seek($j);
        $tran[] = $result ->fetch_array(MYSQLI_ASSOC);
    }


//Impresion de datos
	$options = "";
    $options .= '<table id="FTable" class="table display">';
    $options .= '<thead>';
    $options .= '<tr>';
    $options .= '<th> ID </th>';
    $options .= '<th> FILE </th>';
    $options .= '<th> Vendedor </th>';
    $options .= '<th> Cliente </th>';
    $options .= '<th> Aseguradora </th>';
    $options .= '<th> Movimiento </th>';
    $options .= '<th> Ramo </th>';
    $options .= '<th> Poliza </th>';
    $options .= '<th> Anexo </th>';
    $options .= '<th> Inicio Vigencia </th>';
    $options .= '<th> Fin Vigencia </th>';
    $options .= '<th> Valor Asegurado </th>';
    $options .= '<th> Tasa </th>';
    $options .= '<th> Prima </th>';
    $options .= '<th> % </th>';
    $options .= '<th> Comision </th>';
    $options .= '<th> Medio de Solicitud </th>';
    $options .= '<th> Numero Carta Solicitud </th>';
    $options .= '<th> Fecha de Solicitud </th>';
    $options .= '<th> Carta Firmada Entrega </th>';
    $options .= '<th> Fecha de Entrega </th>';
    $options .= '<th> Estado Transaccion </th>';
    $options .= '<th> Metodo de Pago </th>';
    $options .= '<th> Numero de Cuotas </th>';
    $options .= '</tr>';
    $options .= '</thead>';
    $options .= '<tbody>';
    foreach ($tran as $t) {
    	$options .= '<tr>';
    	$options .= '<td>'. $t['idTransaccion'] .'</td>';
    	$options .= '<td>'. $t['fileCliente'] .'</td>';
    	$options .= '<td>'. $t['nombreUsuario'] .'</td>';
    	$options .= '<td>'. $t['nombreCliente'] .'</td>';
    	$options .= '<td>'. $t['siglaAseguradora'] .'</td>';
    	$options .= '<td>'. $t['siglaMovimiento'] .'</td>';
    	$options .= '<td>'. $t['siglaRamo'] .'</td>';
    	$options .= '<td>'. $t['numeroPoliza'] .'</td>';
    	$options .= '<td>'. $t['numeroAnexo'] .'</td>';
    	$options .= '<td nowrap>'. $t['inicioVigenciaAnexo'] .'</td>';
    	$options .= '<td nowrap>'. $t['finVigenciaAnexo'] .'</td>';
    	$options .= '<td>'. $t['valorTotalAseguradoAnexo'] .'</td>';
    	$options .= '<td>'. $t['tasaPago'] .'</td>';
    	$options .= '<td>'. $t['primaPago'] .'</td>';
    	$options .= '<td>'. $t['porcentajeComisionPago'] .'</td>';
    	$options .= '<td>'. $t['comisionPago'] .'</td>';
    	$options .= '<td>'. $t['medioSolicitud'] .'</td>';
    	$options .= '<td>'. $t['numeroCartaSolicitud'] .'</td>';
    	$options .= '<td nowrap>'. $t['fechaSolicitud'] .'</td>';
    	$options .= '<td>'. $t['cartaFirmadaEntrega'] .'</td>';
    	$options .= '<td nowrap>'. $t['fechaEntrega'] .'</td>';
    	$options .= '<td>'. $t['estadoTransaccion'] .'</td>';
    	$options .= '<td>'. $t['metodoPago'] .'</td>';
    	$options .= '<td>'. $t['numeroCuotas'] .'</td>';
    	$options .= '</tr>';
    }
    $options .= '</tbody>';
    $options .= '</table>';

    echo $options;

?>