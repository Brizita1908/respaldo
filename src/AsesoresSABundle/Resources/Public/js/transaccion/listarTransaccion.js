$(document).ready(function() {
    
    llamar();
    
    function llamar(){
        $.ajax({
		      url: Routing.generate('consultaAllTransaccion'),
		      type: 'post',
		})
		.done(function(msg) {
//                    $('#listT').html(msg);
//                    $('#FTable').DataTable();
		    console.log(msg);
		})
		.fail(function() {
		    console.log("errorConsultaTabla");
		})
		.always(function() {
		    console.log("completeConsultaTabla");
		});
    }
    
});


