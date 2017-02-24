$(document).ready(function() {
    $( "form[name='transaccion']" ).validate({
        rules: {
            "transaccion[idmovimiento]": {
              required: true
            },
            "transaccion[mediosolicitud]": {
              required: true
            },
            "transaccion[numerocartasolicitud]": {
              required: false
            },
            "transaccion[fechasolicitud]": {
              required: false
            },
            "transaccion[cartafirmadaentrega]": {
              required: false
            },
            "transaccion[fechaentrega]": {
              required: false
            },
            "transaccion[estadotransaccion]": {
              required: true
            },
            "transaccion[idusuario]": {
              required: true
            }
        },
        messages: {
            "transaccion[idmovimiento]": {
              required: "Seleccione un Movimiento"
            },
            "transaccion[mediosolicitud]": {
              required: "Seleccione un medio de solicitud"
            },
//            "transaccion[numerocartasolicitud]": {
//              required: "Escriba un número de carta de solicitud"
//            },
//            "transaccion[fechasolicitud]": {
//              required: "Escoja una fecha de solicitud"
//            },
//            "transaccion[cartafirmadaentrega]": {
//              required: "Escriba un número de carta entregada"
//            },
//            "transaccion[fechaentrega]": {
//              required: "Escoja una fecha de entrega"
//            },
            "transaccion[estadotransaccion]": {
              required: "Seleccione un estado de transaccion"
            },
            "transaccion[idusuario]": {
              required: "Seleccione un Vendedor"
            }
        }
    });
});





