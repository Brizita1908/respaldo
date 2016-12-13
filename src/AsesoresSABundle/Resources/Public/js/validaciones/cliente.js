$(document).ready(function() {
     
    $( "form[name='cliente']" ).validate({
        rules: {
            "cliente[filecliente]": {
              required: true,
              minlength: 4,
              number: true
            },
            "cliente[nombrecliente]": {
              required: true
            },
            "cliente[apellidocliente]": {
              required: true
            }
        },
        messages: {
            "cliente[filecliente]": {
              required: "Ingresa una sigla.",
              minlength: $.validator.format("Al menos {0} caracteres requeridos"),
              number: "Ingrese solo numeros"
            },
            "cliente[nombrecliente]": {
              required: "Ingresa un nombre."
            },
            "cliente[apellidocliente]": {
              required: "Ingrese un apellido."
            }
        }
    });
  
    $("#cliente_Guardar").on('click', function(){
        if( $( "form[name='cliente']" ).valid() ) {
            event.preventDefault();
        }
    });
});


