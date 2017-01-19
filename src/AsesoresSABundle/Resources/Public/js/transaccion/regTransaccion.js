$(document).ready(function() {
        //Para ocultar el formulario Poliza y Transaccion
	ocultaFormPoliza();
	ocultaFormTransaccion();
        ocultaFormAnexo();
        $('.btnTransaccion').hide();
        
        //Para cuando el usuario da click en consultar Poliza
        $(".btnconsultaPoliza").on("click", function(event){
	    event.preventDefault();
            if(consultahabilitadaP){
	        consultaPoliza();
            }
        });
        
        //Para cuando el usuario da click en consultar Anexo
        $(".btnconsultaAnexo").on("click", function(event){
	    event.preventDefault();
            if(consultahabilitadaA){
                consultaAnexoById();
            }
        });
        
        //Para cuando el usuario da click en la lista select de movimiento transaccion
        $("#transaccion_idmovimiento").change(function(){
            $(this).val() !== "" ? consultaMovInTransaccion($(this).val()) : ocultaFormTransaccion() ;
        });
        //Para cuando el usuario da click en la lista select de medio de solicitud transaccion
        $("#transaccion_mediosolicitud").change(function(){
            $(this).val() === "C" ? $(".TcartaVisible").show() : restableceCartaTransaccion() ;
        });
        
        //Para calcular la comision de pago, tanto cuando digite en prima pago como para porcentaje comision pago
        $("#pago_primapago").keyup(function() {
            if($.isNumeric($("#pago_primapago").val())){
                var comision = ($("#pago_primapago").val() * $("#pago_porcentajecomisionpago").val())/100;
                $("#pago_comisionpago").val(comision);
                $(".notificacionAnexo").text("");
            }else{
               $(".notificacionAnexo").text("Ingrese un valor numérico en Prima");
            }
	});
        
        $("#pago_porcentajecomisionpago").keyup(function() {
            if($.isNumeric($("#pago_porcentajecomisionpago").val())){
                var comision = ($("#pago_primapago").val() * $("#pago_porcentajecomisionpago").val())/100;
                $("#pago_comisionpago").val(comision);
                $(".notificacionAnexo").text("");
            }else{
               $(".notificacionAnexo").text("Ingrese un valor numérico en Porcentaje Comisión Pago");
            }
            
	});
        
        //Para cuando el usuario da click en la lista select de metodo de pago anexo
        $("#pago_metodopago").change(function(){
            if($(this).val() === "Credito" || $(this).val() === "Tarjeta de Credito")
            {
                $("#pago_numerocuotas").prop( "disabled", false );
                $("#pago_numerocuotas").val("");
            }
            else
            {
                $("#pago_numerocuotas").prop( "disabled", true );
                $("#pago_numerocuotas").val(0);
            }
        });   
        
        //Para consultar las transacciones de un anexo registrado
	function consultaMovInTransaccion(idMovimiento) {
            console.log(_idAnexo);
		$.ajax({
			url: Routing.generate('consultaMovInTransaccion'),
			type: 'post',
			data: {
			    idanexo: _idAnexo,
                            idmovimiento:idMovimiento
				}
			})
		.done(function(siglaMovTransaccion) {
                    verificaMovimientoTransaccion(siglaMovTransaccion);
            })
		.fail(function() {
		    console.log("Error al Consultar Anexos");
		});
	};
        
        function verificaMovimientoTransaccion(siglaMovTransaccion) {
            //en el caso que exista alguna sigla se toma acciones
            //xq si devuelve una sigla es xq ya esta registrada la transaccion.
            if(siglaMovTransaccion === "N"){
                ocultaFormTransaccion();
                $(".notificacionTransaccion").text("Ya se ha registrado una transacción Nueva.");
            }else{
                muestraFormTransaccion();
                $(".notificacionTransaccion").text("Puede Registrar una transacción");
                console.log(siglaMovTransaccion);
            }
           // quitaSelected();
           // poliza ? polizaEncontrada(poliza) : polizaNoEncontrada();
        };
        
       
        var consultahabilitadaP= true;
	//Metodo para cuando escriban el numero de poliza en el input #poliza_numeropoliza
	$("#poliza_numeropoliza").keyup(function(event) {
            event.preventDefault();
	    verificaNumeroPoliza($("#poliza_numeropoliza").val().length);
	});

	//Para validar el numero de digitos que se ingresan en el campo 'numero de poliza'
	function verificaNumeroPoliza(longitudCaracteres){
                quitaSelected();
                ocultaFormPoliza();
		if(longitudCaracteres<=5 && longitudCaracteres>=1)
		{
                    consultahabilitadaP=true;
		    notificacion("");
		}
		else
		if(longitudCaracteres>5)
		{
			notificacion("*Máximo debe digitar 5 números correspondiente a 'Número de póliza'.");
                        consultahabilitadaP=false;
		}
		else
		if(longitudCaracteres<1)
		{
			notificacion("*Ingrese en el campo de texto el número de poliza a registrar o buscar.");
                        consultahabilitadaP=false;
		}
	}
        
        var consultahabilitadaA= true;
        //Para el anexo
        $("#anexo_numeroanexo").keyup(function(event) {
		event.preventDefault();
                verificaNumeroAnexo($("#anexo_numeroanexo").val().length);
	});
        //Para validar el numero de digitos que se ingresan en el campo 'numero de anexo'
	function verificaNumeroAnexo(longitudCaracteres){
            $(".Avisible").hide();
            if(longitudCaracteres<1)
		{
			$(".notificacionAnexo").text("*Ingrese en el campo de texto el número de anexo a registrar.");
			ocultaFormAnexo();
                        consultahabilitadaA=false;
		}
            else
            if(longitudCaracteres>0 && longitudCaracteres<3)
		{
                        $(".notificacionAnexo").text("*Minimo debe digitar 3 números correspondiente a 'Número de anexo'.");
                        ocultaFormAnexo();
                        consultahabilitadaA=false;
		}
            else
            if(longitudCaracteres>=3)
		{
                        $(".notificacionAnexo").text("");
                        consultahabilitadaA=true;
		}
	}

	//2 Consulta poliza para saber si existe o no
	function consultaPoliza(){
	    $.ajax({
		      url: Routing.generate('consultaPoliza'),
                      type: 'post',
		      data: {
                            nropoliza: $("#poliza_numeropoliza").val()                      
                            },
		})
		.done(function(poliza) {
                    verificaPolizaConsultada(poliza);
		})
		.fail(function() {
		    console.log("error al Consultar la Poliza");
		});	
	}
        
        function verificaPolizaConsultada(poliza) {
            quitaSelected();
            restableceTablaTransaccion();
            poliza ? polizaEncontrada(poliza) : polizaNoEncontrada();
        };
        //Para cuando la poliza fue encontrada y se quiere mostrarlos en el formulario para que no registre nuevamente
        function polizaEncontrada(poliza) {
            notificacion("Póliza Encontrada");
            asignaIdPoliza(poliza.idpoliza);
            consultaAnexos(poliza.idpoliza);
            $('#poliza_idcliente').val(poliza.idcliente.idcliente); 
            $('#poliza_idaseguradora').val(poliza.idaseguradora.idaseguradora); 
            polizaEncontradaControles();
        }
        
        function polizaEncontradaControles(){
            $('#poliza_idcliente').attr('disabled','disabled');
	    $('#poliza_idaseguradora').attr('disabled','disabled');
	    $('.btnGuardaPoliza').hide();
	    $('.btnAnexo').show();
        }
        
        //Para cuando la poliza no fue encontrada y se quiere reiniciar los selects
	function polizaNoEncontrada(){
                notificacion("Póliza no Encontrada, puede registrar una.");
                muestraFormPoliza();
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
	    if(($("#poliza_idcliente").val() !== "")&&($("#poliza_idaseguradora").val() !== "")){
                //Para consultar el cliente seleccionado
                $.ajax({
		      url: Routing.generate('consultaCliente'),
                      type: 'post',
		      data: {
                            idcliente: $("#poliza_idcliente").val()                      
                            },
		})
		.done(function(_cliente) {
                    //Para consultar la aseguradora seleccionada
                    $.ajax({
                          url: Routing.generate('consultaAseguradora'),
                          type: 'post',
                          data: {
                                idaseguradora: $("#poliza_idaseguradora").val()                    
                                }
                    })
                    .done(function(_aseguradora) {
                        notificacion("");
                        var estadoaseguradora ;
                        _aseguradora[0].estadoaseguradora === 'A'  ? estadoaseguradora = 'Aseguradora activa' : estadoaseguradora = 'Aseguradora inactiva';
                        $('#modalRegistroPoliza').modal('show');

                        $('#contenidoModalConfirmacionPoliza').html('<h4>Desea realmente registrar la poliza con los siguientes datos ? </h4>'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Cliente</h4></center>'+
                                                                    '<p><strong>File : </strong> '+_cliente.filecliente+'</p>'+
                                                                    '<p><strong>Nombre : </strong> '+_cliente.nombrecliente+'</p>'+
                                                                    '<p><strong>Apellido : </strong> '+_cliente.apellidocliente+'</p>'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Aseguradora</h4></center>'+
                                                                    '<p><strong>Sigla : </strong> '+_aseguradora[0].siglaaseguradora+'</p>'+
                                                                    '<p><strong>Nombre : </strong> '+_aseguradora[0].nombreaseguradora+'</p>'+
                                                                    '<p><strong>Estado : </strong> '+ estadoaseguradora +'</p>'
                                                                      );
                        
                        
                    })
                    .fail(function() {
                        console.log("error al Consultar el Cliente");
                    });
		})
		.fail(function() {
		    console.log("error al Consultar el Cliente");
		});
	    }else{
	    	notificacion("*Debe seleccionar un cliente y/o una aseguradora para registrar.");
	    }
	});
        //Metodo para cuando la poliza es confirmada
        $(".btnConfirmaGuardaPoliza").on("click", function(event){
	    event.preventDefault();
            $.ajax({
		      url: Routing.generate('registraPoliza'),
		      type: 'post',
		      data: {
                            nropoliza: $("#poliza_numeropoliza").val(),
                            idcliente: $("#poliza_idcliente").val(),
                            idaseguradora: $("#poliza_idaseguradora").val()                        
			    },
		})
		.done(function(msg) {
		    notificacion(msg);
                    polizaEncontradaControles();
                    $('#modalRegistroPoliza').modal('hide');
		})
		.fail(function() {
		    console.log("error");
		});
        });
        
        //Para declarar y asignar el idPoliza necesario para el registro del anexo
	var _idPoliza = 0;
	function asignaIdPoliza(idPoliza) {
			_idPoliza = idPoliza;
	}
        
        function consultaAnexoById(){
	    $.ajax({
		      url: Routing.generate('consultaAnexoById'),
                      type: 'post',
		      data: {
                            nroanexo: $("#anexo_numeroanexo").val(),
                            idpoliza: _idPoliza
                            },
		})
		.done(function(anexo) {
                    verificaAnexoByIdConsultada(anexo);
            
		})
		.fail(function() {
		    console.log("error al Consultar la Poliza");
		});	
	};
        
        function verificaAnexoByIdConsultada(anexo){
            if(anexo){
                $("#ModalAnexo .Avisible").hide();
                $(".notificacionAnexo").text("El anexo ingresado ya se encuentra registrado");
            }else{
                $(".notificacionAnexo").text("Número de anexo disponible, puede registrar.");
                $("#ModalAnexo .Avisible").show();
                var nroanexo;
                nroanexo= $("#anexo_numeroanexo").val();
                $( "form[name='anexo']" )[0].reset();
                $( "form[name='pago']" )[0].reset();
                $("#anexo_numeroanexo").val(nroanexo);
            }
        };
        

        
        $(".btnGuardarAnexo").click(function(event) {
            event.preventDefault();
            if($( "form[name='anexo']" ).valid() && $( "form[name='pago']" ).valid()) {
                if($("#anexo_iniciovigenciaanexo").val() < $("#anexo_finvigenciaanexo").val()){
                    $(".notificacionAnexo").text("");
                    $('#modalRegistroAnexo').modal('show');
                    $('#contenidoModalConfirmacionAnexo').html('<h4>Registro de anexo en la poliza (número) '+$('#poliza_numeropoliza').val()+'</h4>'+
                                                                '<h4>Desea realmente registrar el anexo con los siguientes datos ? </h4>'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Anexo</h4></center>'+
                                                                    '<p><strong>Número de anexo : </strong> '+$("#anexo_numeroanexo").val()+'</p>'+
                                                                    '<p><strong>Ramo : </strong> '+$("#anexo_idramo option:selected").text()+'</p>'+
                                                                    '<p><strong>Inicio Vigencia de anexo : </strong> '+$("#anexo_iniciovigenciaanexo").val()+'</p>'+
                                                                    '<p><strong>Fin Vigencia de anexo : </strong> '+$("#anexo_finvigenciaanexo").val()+'</p>'+
                                                                    '<p><strong>Valor asegurado : </strong> '+$("#anexo_valortotalaseguradoanexo").val()+'</p>'+
                                                                    '<p><strong>Tasa de Pago : </strong> '+$("#pago_tasapago").val()+'</p>'+
                                                                    '<p><strong>Prima de Pago : </strong> '+$("#pago_primapago").val()+'</p>'+
                                                                    '<p><strong>Método de Pago : </strong> '+$("#pago_metodopago").val()+'</p>'+
                                                                    '<p><strong>Número de Cuotas : </strong> '+$("#pago_numerocuotas").val()+'</p>'+
                                                                    '<p><strong>Comisión de Pago : </strong> '+$("#pago_comisionpago").val()+'</p>'
                                                                      );
                }else{
                    $(".notificacionAnexo").text("La fecha Fin Vigencia Anexo debe ser mayor a la fecha Inicio");
                }
            }else{
                $(".notificacionAnexo").text("Campos requeridos incompletos, revise el formulario");
            }
	});
        //Para cuando el usuario confirma los datos del anexo y del pago
        $('.btnConfirmaGuardaAnexo').click(function(event) {
            event.preventDefault();
            $.ajax({
		      url: Routing.generate('registraPago'),
		      type: 'post',
		      data: {
                          //Para el pago
                            tasaPago: $("#pago_tasapago").val(),
                            primaPago: $("#pago_primapago").val(),
                            porcentajeComisionPago : $("#pago_porcentajecomisionpago").val(), 
                            metodoPago : $("#pago_metodopago").val(),  
                            numeroCuotasPago : $("#pago_numerocuotas").val(),
                            comisionPago : $("#pago_comisionpago").val() 
			    },
		})
		.done(function(_idPago) {
                    $.ajax({
                             url: Routing.generate('registraAnexo'),
                             type: 'post',
                             data: {
                                   //Para el anexo
                                    idPago: _idPago,
                                    idRamo: $("#anexo_idramo").val(),
                                    idPoliza: _idPoliza,
                                    numeroAnexo: $("#anexo_numeroanexo").val(),
                                    inicioVigenciaAnexo : $("#anexo_iniciovigenciaanexo").val(), 
                                    finVigenciaAnexo : $("#anexo_finvigenciaanexo").val(),  
                                    valorTotalAseguradoAnexo : $("#anexo_valortotalaseguradoanexo").val()
                                   }
                       })
                       .done(function(anexo) {
                            $('#tabla_anexos').html(null);
                            notificacion("El anexo # "+anexo.numeroanexo+" ha sido registrado exitosamente en la poliza # "+anexo.idpoliza.numeropoliza);
                            consultaAnexos(anexo.idpoliza.idpoliza);
                            $('#modalRegistroAnexo').modal('hide');
                            $('#ModalAnexo').modal('hide');
                       })
                       .fail(function() {
                           console.log("error");
                       });
		})
		.fail(function() {
		    console.log("error");
		});
        });
        
        $(".btnRegistroTransaccion").click(function(event) {
            event.preventDefault();
            if($( "form[name='transaccion']" ).valid()) {
                
                $.ajax({
		      url: Routing.generate('consultaAnexoByIdAnexo'),
		      type: 'post',
		      data: {
                                idanexo: _idAnexo
                            }
		})
		.done(function(anexo) {
                    console.log(anexo);
                    $(".notificacionTransaccion").text("");
                    $('#modalConfirmacionTransaccion').modal('show');
                    var cartahtml = "";
                    if($("#transaccion_mediosolicitud").val() === "C")
                    {
                        cartahtml = '<p><strong>Número de carta de solicitud : </strong> '+$("#transaccion_numerocartasolicitud").val()+'</p>'+
                                    '<p><strong>Fecha de solicitud  : </strong> '+$("#transaccion_fechasolicitud").val()+'</p>'+
                                    '<p><strong>Número de carta entregada : </strong> '+$("#transaccion_cartafirmadaentrega").val()+'</p>'+
                                    '<p><strong>Fecha de entrega : </strong> '+$("#transaccion_fechaentrega").val()+'</p>';
                    }
                    $('#contenidoModalConfirmacionTransaccion').html('<center><h4>Desea realmente registrar el anexo con los siguientes datos ?</h4></center>'+
                                                                    '<div style="border-color: red;border-style:outset;">'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Póliza</h4></center>'+
                                                                    '<p><strong>Número de Póliza : </strong> '+anexo.idpoliza.idpoliza+'</p>'+
                                                                    '<h4 style="background-color:cornflowerblue;">Cliente</h4>'+
                                                                    '<p><strong>File Cliente : </strong> '+anexo.idpoliza.idcliente.filecliente+'</p>'+
                                                                    '<p><strong>Nombre : </strong> '+anexo.idpoliza.idcliente.nombrecliente+'</p>'+
                                                                    '<p><strong>Apellido : </strong> '+anexo.idpoliza.idcliente.apellidocliente+'</p>'+
                                                                    '<h4 style="background-color:cornflowerblue;">Aseguradora</h4>'+
                                                                    '<p><strong>Sigla : </strong> '+anexo.idpoliza.idaseguradora.siglaaseguradora+'</p>'+
                                                                    '<p><strong>Nombre : </strong> '+anexo.idpoliza.idaseguradora.nombreaseguradora+'</p>'+
                                                                    '<p><strong>Estado : </strong> '+ anexo.idpoliza.idaseguradora.estadoaseguradora +'</p>'+
                                                                    '</div><br>'+
                                                                    '<div style="border-color: red;border-style:outset;">'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Anexo</h4></center>'+
                                                                    '<p><strong>Número de anexo : </strong> '+anexo.numeroanexo+'</p>'+
                                                                    '<p><strong>Ramo : </strong> '+anexo.idramo.nombreramo+'</p>'+
                                                                    '<p><strong>Inicio Vigencia de anexo : </strong> '+anexo.iniciovigenciaanexo+'</p>'+
                                                                    '<p><strong>Fin Vigencia de anexo : </strong> '+anexo.finvigenciaanexo+'</p>'+
                                                                    '</div><br>'+
                                                                    '<div style="border-color: red;border-style:outset;">'+
                                                                    '<center><h4 style="background-color:cornflowerblue;">Transacción</h4></center>'+
                                                                    '<p><strong>Movimiento : </strong> '+$("#transaccion_idmovimiento option:selected").text()+'</p>'+
                                                                    '<p><strong>Medio  : </strong> '+$("#transaccion_mediosolicitud option:selected").text()+'</p>'+
                                                                    '<p><strong>Estado de Transacción : </strong> '+$("#transaccion_estadotransaccion option:selected").text()+'</p>'+
                                                                    '<p><strong>Vendedor : </strong> '+$("#transaccion_idusuario option:selected").text()+'</p>'+
                                                                    cartahtml+
                                                                    '</div>'
                                                                    );
		})
		.fail(function() {
		    console.log("error");
		});
            }else{
                $(".notificacionTransaccion").text("Campos requeridos incompletos, revise el formulario");
            }
	});
        $(".btnConfirmaGuardaTransaccion").click(function(event) {
            event.preventDefault();
            $.ajax({
                url: Routing.generate('registraTransaccion'),
                type: 'post',
                data: {
                        idmovimiento: $("#transaccion_idmovimiento").val(),
                        idusuario: $("#transaccion_idusuario").val(),
                        idanexo: _idAnexo,
                        fechaentrega: $("#transaccion_fechaentrega").val(),
                        mediosolicitud: $("#transaccion_mediosolicitud").val(),
                        fechasolicitud: $("#transaccion_fechasolicitud").val(),
                        cartafirmadaentrega: $("#transaccion_cartafirmadaentrega").val(),
                        numerocartasolicitud: $("#transaccion_numerocartasolicitud").val(),
                        estadotransaccion: $("#transaccion_estadotransaccion").val()
                    }
		})
		.done(function(transaccionanexo) {
                    console.log(transaccionanexo);
                    $('.tablaTransacciones').html(null);
                    notificacion("La transaccion con movimiento '"+
                                    transaccionanexo.idtransaccion.idmovimiento.nombremovimiento+
                                    "' ha sido registrado exitosamente en el anexo # "+transaccionanexo.idanexo.numeroanexo +
                                    " de la poliza # "+transaccionanexo.idanexo.idpoliza.numeropoliza);
                    consultaTransacciones(transaccionanexo.idanexo.idanexo);
                    $('#modalConfirmacionTransaccion').modal('hide');
                    $('#ModalTransaccion').modal('hide');
		})
		.fail(function() {
		    console.log("error");
		});
        });
        
        
        
        //Para controlar que el cierre del modal resetee los forms anexo y pago
        $('#ModalAnexo').on('hidden.bs.modal', function() {
            ocultaFormAnexo();
            $(".notificacionTransaccion").text("*Seleccione un movimiento para proceder al registro de la transacción.");
            $( "form[name='anexo']" )[0].reset();
            $( "form[name='pago']" )[0].reset();
          });
          
          //Para controlar que el cierre del modal resetee el form transaccion
        $('#ModalTransaccion').on('hidden.bs.modal', function() {
            ocultaFormTransaccion();
            $(".notificacionAnexo").text("*Ingrese en el campo de texto el número de anexo a registrar.");
            $( "form[name='transaccion']" )[0].reset();
          });
        
        //Para consultar los anexos de una poliza registrada
	function consultaAnexos(_idPoliza) {
		$.ajax({
			url: Routing.generate('consultaAnexos'),
			type: 'post',
			data: {
			    idpoliza: _idPoliza                    
				},
			})
		.done(function(anexos) {
                    var htmlAnexo;
                    if (jQuery.isEmptyObject(anexos)) 
                        {
                            htmlAnexo = "";
                        }
                        else
                        {
                            //Llenado de la cabezera de la tabla
                            htmlAnexo = '<table class="table tablaAnexo">';
                            htmlAnexo += '<caption style="color:black"><center><h4>Lista de Anexos Pertenecientes a la Poliza número '+$("#poliza_numeropoliza").val()+'</h4></center></caption>';
                            htmlAnexo += '<thead>';
                            htmlAnexo += '<tr>';
                            htmlAnexo += '<th></th>';
                            htmlAnexo += '<th>numeroAnexo</th>';
                            htmlAnexo += '<th>Ramo</th>';
                            htmlAnexo += '<th>Inicio Vigencia</th>';
                            htmlAnexo += '<th>Fin Vigencia</th>';
                            htmlAnexo += '<th>Valor Total Asegurado</th>';
                            htmlAnexo += '</tr>';
                            htmlAnexo += '</thead></center>';
                            htmlAnexo += '<tbody>';
                            var contador = 1;
                            anexos.forEach(function(anexo) {
                                htmlAnexo += '<tr>';
                                htmlAnexo += '<td><input type="checkbox" name="idAnexo" value="'+anexo.idanexo+'"></input></td>';
                                htmlAnexo += '<td>'+anexo.numeroanexo+'</td>';
                                htmlAnexo += '<td>'+anexo.idramo.siglaramo+'</td>';
                                htmlAnexo += '<td>'+anexo.iniciovigenciaanexo+'</td>';
                                htmlAnexo += '<td>'+anexo.finvigenciaanexo+'</td>';
                                htmlAnexo += '<td>'+anexo.valortotalaseguradoanexo+'</td>';
                                htmlAnexo += '</tr>';
                                contador++;
                            });
                            htmlAnexo += '</tbody>';
                            htmlAnexo += '</table>';
		        }
                    $('#tabla_anexos').html(htmlAnexo);
                    muestraFormPoliza();
	            functioncheck();
            })
		.fail(function() {
		    console.log("Error al Consultar Anexos");
		});
	}
        
	//Para enviar notificaciones a pantalla
	function notificacion(mensaje){
		$(".notificaTransaccion").text(mensaje);
	}
	
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
                    consultaTransacciones(_idAnexo);
		  }
		  else 
		  {
		    $checkbox.prop("checked", false);
                    restableceTablaTransaccion();
		  }
		});
	}
        
        //Para cuando el usuario da descheck al anexo
	function restableceTablaTransaccion() {
            _idAnexo = 0 ;
            $('#tabla_transacciones').html(null); 
            $('.btnTransaccion').hide();
        }
        
        
        //Para consultar las transacciones de un anexo registrado
	function consultaTransacciones(idAnexo) {
		$.ajax({
			url: Routing.generate('consultaTransacciones'),
			type: 'post',
			data: {
			    idanexo: idAnexo                    
				},
			})
		.done(function(transacciones) {
                    console.log(transacciones);
                    var htmlTransaccion;
                    if (jQuery.isEmptyObject(transacciones)) 
                        {
                            htmlTransaccion = "";
                        }
                        else
                        {
                            //Llenado de la cabezera de la tabla
                            htmlTransaccion = '<table class="table tablaTransacciones">';
                            htmlTransaccion += '<caption style="color:black"><center><h4>Lista de Transacciones Pertenecientes al Anexo número '+transacciones[0].idanexo.numeroanexo+'</h4></center></caption>';
                            htmlTransaccion += '<thead>';
                            htmlTransaccion += '<tr>';
                            htmlTransaccion += '<th>Nro</th>';
                            htmlTransaccion += '<th>Estado Transacción</th>';
                            htmlTransaccion += '<th>Movimiento</th>';
                            htmlTransaccion += '<th>Medio Solicitud</th>';
                            htmlTransaccion += '<th>Número de Carta Solicitud</th>';
                            htmlTransaccion += '<th>Fecha de Solicitud</th>';
                            htmlTransaccion += '<th>Fecha de Entrega</th>';
                            htmlTransaccion += '<th>Carta Firmada Entrega</th>';
                            htmlTransaccion += '<th>Usuario Registrante</th>';
                            htmlTransaccion += '<th>Rol</th>';
                            htmlTransaccion += '</tr>';
                            htmlTransaccion += '</thead></center>';
                            htmlTransaccion += '<tbody>';
                            var contador = 1;
                            transacciones.forEach(function(transaccion) {
                                htmlTransaccion += '<tr>';
                                htmlTransaccion += '<td>'+contador+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.estadotransaccion+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.idmovimiento.nombremovimiento+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.mediosolicitud+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.numerocartasolicitud+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.fechasolicitud+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.fechaentrega+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.cartafirmadaentrega+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.idusuario.nombreusuario+'</td>';
                                htmlTransaccion += '<td>'+transaccion.idtransaccion.idusuario.idperfil.rolperfil+'</td>';
                                htmlTransaccion += '</tr>';
                                contador++;
                            });
                            htmlTransaccion += '</tbody>';
                            htmlTransaccion += '</table>';
		        }
                    $('#tabla_transacciones').html(htmlTransaccion);
                    $('.btnTransaccion').show();
                    
            })
		.fail(function() {
		    console.log("Error al Consultar Anexos");
		});
	}

    //Para quitar todos los selected de los options y tabla de anexos
    function quitaSelected() {
        $("#poliza_idcliente option").prop("selected", false);
        $("#poliza_idaseguradora option").prop("selected", false);
        $( "tablaAnexo" ).remove();
    }
    //FUNCIONES OCULTAR MOSTRAR
	//funcion oculta formulario poliza
	function ocultaFormPoliza(){
		$(".Pvisible").hide();
	}

	//funcion muestra formulario poliza
	function muestraFormPoliza(){
		$(".Pvisible").show();
	}
        
        //funcion oculta formulario anexo
        function ocultaFormAnexo(){
            $(".Avisible").hide();
        }
        //funcion muestra formulario anexo
        function muestraFormAnexo(){
            $(".Avisible").show();
        }

	//funcion oculta formulario transaccion
	function ocultaFormTransaccion(){
                restableceCartaTransaccion();
                $(".Tvisible").hide();
                $(".notificacionTransaccion").text("*Seleccione un movimiento para proceder al registro del anexo.");
	}
        
        function restableceCartaTransaccion(){
            $(".TcartaVisible").hide();
            $("#transaccion_numerocartasolicitud").val("");
            $("#transaccion_fechasolicitud").val("");
            $("#transaccion_cartafirmadaentrega").val("");
            $("#transaccion_fechaentrega").val("");
        }

	//funcion oculta formulario transaccion
	function muestraFormTransaccion(){
                $(".Tvisible").show();
	} 
});