$(document).ready(function() {
    $( "form[name='anexo']" ).validate({
        rules: {
            "anexo[idramo]": {
              required: true
            },
            "anexo[iniciovigenciaanexo]": {
              required: true
            },
            "anexo[finvigenciaanexo]": {
              required: true
            },
            "anexo[valortotalaseguradoanexo]": {
              required: true
            }
        },
        messages: {
            "anexo[idramo]": {
              required: "Seleccione un Ramo"
            },
            "anexo[iniciovigenciaanexo]": {
              required: "Selecciona una fecha de inicio"
            },
            "anexo[finvigenciaanexo]": {
              required: "Selecciona una fecha de fin"
            },
            "anexo[valortotalaseguradoanexo]": {
              required: "Ingrese un valor"
            }
        }
    });
});





