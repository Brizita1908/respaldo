$(document).ready(function() {
    
    llamar();
    
    function llamar(){
        $.ajax({
		      url: '../../../php/listarTransaccion.php',
		      type: 'post',
		})
		.done(function(msg) {
                    $('#listT').html(msg);
                    $('#FTable').DataTable();
		    console.log("successConsultaTabla");
		})
		.fail(function() {
		    console.log("errorConsultaTabla");
		})
		.always(function() {
		    console.log("completeConsultaTabla");
		});
    }
    
});


