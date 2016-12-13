$(document).ready(function() {
        //Para ocultar el formulario Poliza y Transaccion
	ocultaFormPoliza();
	ocultaFormTransaccion();

	//Metodo para cuando escriban el numero de poliza en el input #poliza_numeropoliza
	$("#poliza_numeropoliza").keyup(function(event) {
		event.preventDefault();
		verificaNumeroPoliza($("#poliza_numeropoliza").val().length);
	});

	//Para validar el numero de digitos que se ingresan en el campo 'numero de poliza'
	function verificaNumeroPoliza(longitudCaracteres){
		if(longitudCaracteres<=5 && longitudCaracteres>=1)
		{
			notificacion("");
			muestraFormPoliza() ; 
			consultaPoliza();
		}
		else
		if(longitudCaracteres>5)
		{
			notificacion("*Máximo debe digitar 5 números correspondiente a 'Número de póliza'.");
			ocultaFormPoliza();
		}
		else
		if(longitudCaracteres<1)
		{
			notificacion("*Ingrese en el campo de texto el número de poliza a registrar o buscar.");
			ocultaFormPoliza();
			quitaSelected();
		}
	}

	//Consulta poliza para saber si existe o no
	function consultaPoliza(){
	    $.ajax({
		      url: '../../../php/consultaPoliza.php',
		      type: 'post',
		      data: {
		        nropoliza: $("#poliza_numeropoliza").val()                      
				},
		})
		.done(function(msg) {
			seleccionaCA(msg);
		    console.log("successConsultaPoliza");
		})
		.fail(function() {
		    console.log("errorConsultaPoliza");
		})
		.always(function() {
		    console.log("completeConsultaPoliza");
		});	
	}

	//Para enviar notificaciones a pantalla
	function notificacion(mensaje){
		$(".notificaTransaccion").text(mensaje);
	}
	
	function seleccionaCA(poliza) {
		if(poliza != 'null')
			{
				var _poliza= jQuery.parseJSON(poliza);
				asignaIdPoliza(_poliza.idPoliza);
				consultaAnexos(_poliza.idPoliza);
				quitaSelected();
				establecePolizaEncontrada(_poliza.idCliente,_poliza.idAseguradora);
			}
			else
			{
				quitaSelected();
				asignaIdPoliza(null);
				establecePolizaNoEncontrada();
			}
	}

	//Para cuando se haya encontrado la poliza escrita y se establescan los valores en los selects
	function establecePolizaEncontrada(idCliente,idAseguradora){
		$('#poliza_idcliente option[value="'+idCliente+'"]').attr('selected', 'selected'); 
		$('#poliza_idaseguradora option[value="'+idAseguradora+'"]').attr('selected', 'selected'); 
		$('#poliza_idcliente').attr('disabled','disabled');
		$('#poliza_idaseguradora').attr('disabled','disabled');
		$('.btnGuardaPoliza').hide();
		$('.btnAnexo').show();
	}

	//Para cuando la poliza no fue encontrada y se quiere reiniciar los selects
	function establecePolizaNoEncontrada(){
		$('#poliza_idcliente').removeAttr('disabled');
		$('#poliza_idaseguradora').removeAttr('disabled');
		$('#poliza_idcliente option:first-child').attr("selected", "selected");
		$('#poliza_idaseguradora option:first-child').attr("selected", "selected");
		$('.btnGuardaPoliza').show();
		$('.btnAnexo').hide();
	}

	//Metodo para cuando se desea registrar una nueva poliza haciendo click en el boton registrar Poliza
	$(".btnGuardaPoliza").on("click", function(event){
	    event.preventDefault();
	    //Para verificar que los selects esten con datos seleccionados
	    if(($("#poliza_idcliente").val() != "")&&($("#poliza_idaseguradora").val() != "")){
	    	var confirmacion = confirm("Desea registrar la poliza con Cliente : "+$("#poliza_idcliente option:selected").text()+" y Aseguradora : "+$("#poliza_idaseguradora option:selected").text()+" ?");
	    	if(confirmacion){
	    		//registraPoliza();
	    		//location.reload();
	    		$.ajax({
				      url: '../../../php/procesarPoliza.php',
				      type: 'post',
				      data: {
				        nropoliza: $("#poliza_numeropoliza").val(),
				        idcliente: $("#poliza_idcliente").val(),
				        idaseguradora: $("#poliza_idaseguradora").val()                        
						},
				})
				.done(function(msg) {
					notificacion(msg);
					quitaSelected();
				    console.log("successRegistraPoliza");
				})
				.fail(function() {
				    console.log("errorRegistraPoliza");
				})
				.always(function() {
				    console.log("completeRegistraPoliza");
				});
	    	}
	    }else{
	    	notificacion("*Debe seleccionar un cliente y/o una aseguradora para registrar.");
	    }
	});

	$("#poliza_idcliente").change(function(){
		$("#poliza_idcliente").find('option:selected').removeAttr("selected");
		$(this).attr('selected', 'selected'); 
		alert($(this).val());
		//quitaSelected();
	    //process($(this).children(":selected").html());
	}).attr('selected', true);;



	//Funcion para cuando se desea registrar una nueva poliza

	/**
	function registraPoliza(){
		$.ajax({
		      url: '../../../php/procesarPoliza.php',
		      type: 'post',
		      data: {
		        nropoliza: $("#poliza_numeropoliza").val(),
		        idcliente: $("#poliza_idcliente").val(),
		        idaseguradora: $("#poliza_idaseguradora").val()                        
				},
		})
		.done(function(msg) {
			notificacion(msg);
		    console.log("success");
		})
		.fail(function() {
		    console.log("error");
		})
		.always(function() {
		    console.log("complete");
		});
	}**/

	//Funcion para habilitar la funcionalidad de un checkbox seleccionado, y a la vez se pueda desclikar.
	var _idAnexo = 0;
	function functioncheck(){
		$("input:checkbox").on('click', function() {
		  var $checkbox = $(this);
		  if($checkbox.is(":checked"))
		  {
		    var checkboxs = "input:checkbox[name='" + $checkbox.attr("name") + "']";
		    $(checkboxs).prop("checked", false);
		    $checkbox.prop("checked", true);
		    _idAnexo = $checkbox.val();
		    muestraFormTransaccion();
		  }
		  else 
		  {
		    $checkbox.prop("checked", false);
		    _idAnexo = 0 ;
		    ocultaFormTransaccion();
		  }
		});
	}

	



	

	$(".btnGuardarTransaccion").click(function(event) {
    	event.preventDefault();
    	$.ajax({
			url: '../../../php/procesarTransaccion.php',
			type: 'post',
			data: {
			    idMovimiento: $("#transaccion_idmovimiento").val(),
			    idUsuario: $("#transaccion_idusuario").val(),
			    fechaEntrega: $("#transaccion_fechaentrega").val(),
			    medioSolicitud: $("#transaccion_mediosolicitud").val(),
			    fechaSolicitud: $("#transaccion_fechasolicitud").val(),
			    cartaFirmadaEntrega: $("#transaccion_cartafirmadaentrega").val(),
			    numeroCartaSolicitud: $("#transaccion_numerocartasolicitud").val(),
			    estadoTransaccion: $("#transaccion_estadotransaccion").val()
				},
			})
		.done(function(msg) {
				var _transaccion= jQuery.parseJSON(msg);
				$.ajax({
					url: '../../../php/procesarTransaccionAnexo.php',
					type: 'post',
					data: {
					    idTransaccion: _transaccion.idTransaccion,
					    idAnexo: _idAnexo
						},
					})
				.done(function(msg) {
					alert(msg);
				    console.log("success");
				})
				.fail(function() {
				    console.log("error");
				})
				.always(function() {
				   console.log("complete");
				});
		    	console.log("success");
		})
		.fail(function() {
		    console.log("error");
		})
		.always(function() {
		   console.log("complete");
		});
    });


	//Para consultar los anexos de una poliza registrada
	function consultaAnexos(_idPoliza) {
		$.ajax({
			url: '../../../php/consultaAnexo.php',
			type: 'post',
			data: {
			    idPoliza: _idPoliza                    
				},
			})
		.done(function(msg) {
			$('#tabla_anexos').html(msg);
			functioncheck();
		    console.log("success");
		})
		.fail(function() {
		    console.log("error");
		})
		.always(function() {
		   console.log("complete");
		});
	}

	//Para quitar todos los selected de los options y tabla de anexos
	function quitaSelected() {
			$("#poliza_idcliente").find('option:selected').removeAttr("selected");
			$("#poliza_idaseguradora").find('option:selected').removeAttr("selected");
			$( "table" ).remove();
	}

	//Para declarar y asignar el idPoliza necesario para el registro del anexo
	var _idPoliza = 0;
	function asignaIdPoliza(idPoliza) {
			_idPoliza = idPoliza;
	}

        
    $(".btnGuardarAnexo").click(function(event) {
    	event.preventDefault();
    	$.ajax({
		      url: '../../../php/procesarPago.php',
		      type: 'post',
		      data: {
		        tasaPago: $("#pago_tasapago").val(),
		        primaPago: $("#pago_primapago").val(),
		        porcentajeComisionPago : $("#pago_porcentajecomisionpago").val(), 
		        metodoPago : $("#pago_metodopago").val(),  
		        numeroCuotas : $("#pago_numerocuotas").val(),
		        comisionPago : $("#pago_comisionpago").val()                       
				},
		})
		.done(function(msg) {
			var _idPago = parseInt(msg);
		    console.log("success");
		    $.ajax({
			      url: '../../../php/procesarAnexo.php',
			      type: 'post',
			      data: {
			      	idPago: _idPago,
			      	idRamo: $("#anexo_idramo").val(),
			      	idPoliza: _idPoliza,
			        numeroAnexo: $("#anexo_numeroanexo").val(),
			        inicioVigenciaAnexo : $("#anexo_iniciovigenciaanexo").val(), 
			        finVigenciaAnexo : $("#anexo_finvigenciaanexo").val(),  
			        valorTotalAseguradoAnexo : $("#anexo_valortotalaseguradoanexo").val()                     
					},
			})
			.done(function(msg) {
				alert(msg);
			    console.log("success");
			})
			.fail(function() {
			    console.log("error");
			})
			.always(function() {
			    console.log("complete");
			});

		})
		.fail(function() {
		    console.log("error");
		})
		.always(function() {
		    console.log("complete");
		}); 
	  
	})

    //FUNCIONES OCULTAR MOSTRAR
	//funcion oculta formulario poliza
	function ocultaFormPoliza(){
		$(".Pvisible").hide();
	}

	//funcion muestra formulario poliza
	function muestraFormPoliza(){
		$(".Pvisible").show();
	}

	//funcion oculta formulario transaccion
	function ocultaFormTransaccion(){
		$("form[name=transaccion]").hide();
	}

	//funcion oculta formulario transaccion
	function muestraFormTransaccion(){
		$("form[name=transaccion]").show();
	}


});