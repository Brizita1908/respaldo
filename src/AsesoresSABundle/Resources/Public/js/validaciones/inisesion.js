$(document).ready(function() {
     
    $( "form[name=inicio_sesion]" ).validate({
       rules: {
            "inicio_sesion[nombreusuario]": {
              required: true
            },
            "inicio_sesion[contrasenausuario]": {
              required: true
            }
        },
        messages: {
            "inicio_sesion[nombreusuario]": {
              required: "Ingrese nombre de usuario."
            },
            "inicio_sesion[contrasenausuario]": {
              required: "Ingrese contraseña."
            }
        }
    });
  
    $("#inicio_sesion_Ingresar").on('click', function(){
            //event.preventDefault();
    });
    
});

