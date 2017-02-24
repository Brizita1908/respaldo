$(document).ready(function() {
    
    $("#ramo_siglaramo").keyup(function(){
        $( "#ramo_siglaramo" ).val($(this).val().toUpperCase());
    });
 
    $( "form[name='ramo']" ).validate({
        rules: {
            "ramo[siglaramo]": {
              required: true,
              minlength: 2,
              lettersonly: true 
            },
            "ramo[nombreramo]": {
              required: true
            },
            "ramo[tiporamo]": {
              required: true
            },
            "ramo[estadoramo]": {
              required: true
            }
        },
        messages: {
            "ramo[siglaramo]": {
              required: "Ingresa una sigla.",
              minlength: $.validator.format("Al menos {0} caracteres requeridos"),
              lettersonly: "Ingrese solo letras"
            },
            "ramo[nombreramo]": {
              required: "Ingresa un nombre."
            },
            "ramo[tiporamo]": {
              required: "Selecciona un Tipo de Ramo."
            },
            "ramo[estadoramo]": {
              required: "Selecciona un Estado de Ramo."
            }
        }
    });
  
    $("#ramo_Guardar").on('click', function(){
        if( $( "form[name='ramo']" ).valid() ) {
            event.preventDefault();
        }
    });
});


