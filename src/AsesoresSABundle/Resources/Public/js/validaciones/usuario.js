$(document).ready(function() {
    
    $( "form[name='usuarios']" ).validate({
        rules: {
            "usuarios[nombreusuario]": {
              required: true
            },
            "usuarios[contrasenausuario][first]": {
              required: true
            },
            "usuarios[contrasenausuario][second]": {
              required: true,
              equalTo: "usuarios[contrasenausuario][first]"
            },
            "usuarios[idperfil]": {
              required: true
            }
        },
        messages: {
            "usuarios[nombreusuario]": {
              required: "Ingresa un nombre Usuario."
            },
            "usuarios[contrasenausuario][first]": {
              required: "Ingresa una contraseña."
            },
            "usuarios[contrasenausuario][second]": {
              required: "Ingresa nuevamente tu contraseña.",
              equalTo: "Las contraseñas deben ser iguales"
            },
            "usuarios[idperfil]": {
              required: "Selecciona un Perfil."
            }
        }
    });
  
    $("#usuarios_Guardar").on('click', function(){
        if( $( "form[name='usuarios']" ).valid() ) {
            event.preventDefault();
        }
    });
});

