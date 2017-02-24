$(document).ready(function() {
    
    $("#aseguradora_siglaaseguradora").keyup(function(){
        $( "#aseguradora_siglaaseguradora" ).val($(this).val().toUpperCase());
    });
 
    $( "form[name='aseguradora']" ).validate({
        rules: {
            "aseguradora[siglaaseguradora]": {
              required: true,
              minlength: 2,
              lettersonly: true 
            },
            "aseguradora[nombreaseguradora]": {
              required: true
            },
            "aseguradora[estadoaseguradora]": {
              required: true
            }
        },
        messages: {
            "aseguradora[siglaaseguradora]": {
              required: "Ingresa una sigla.",
              minlength: $.validator.format("Al menos {0} caracteres requeridos"),
              lettersonly: "Ingrese solo letras"
            },
            "aseguradora[nombreaseguradora]": {
              required: "Ingresa un nombre."
            },
            "aseguradora[estadoaseguradora]": {
              required: "Selecciona un Estado de Aseguradora."
            }
        }
    });
  
    $("#aseguradora_Guardar").on('click', function(){
        if( $( "form[name='aseguradora']" ).valid() ) {
            event.preventDefault();
        }
    });
});


