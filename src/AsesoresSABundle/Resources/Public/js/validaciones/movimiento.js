$(document).ready(function() {
    
    $("#movimiento_siglamovimiento").keyup(function(){
        $( "#movimiento_siglamovimiento" ).val($(this).val().toUpperCase());
    });
 
    $( "form[name='movimiento']" ).validate({
        rules: {
            "movimiento[siglamovimiento]": {
              required: true,
              minlength: 2,
              lettersonly: true 
            },
            "movimiento[nombremovimiento]": {
              required: true
            },
            "movimiento[estadomovimiento]": {
              required: true
            }
        },
        messages: {
            "movimiento[siglamovimiento]": {
              required: "Ingresa una sigla.",
              minlength: $.validator.format("Al menos {0} caracteres requeridos"),
              lettersonly: "Ingrese solo letras"
            },
            "movimiento[nombremovimiento]": {
              required: "Ingresa un nombre."
            },
            "movimiento[estadomovimiento]": {
              required: "Selecciona un Estado de Movimiento."
            }
        }
    });
  
    $("#movimiento_Guardar").on('click', function(){
        if( $( "form[name='movimiento']" ).valid() ) {
            //event.preventDefault();
        }
    });
});


