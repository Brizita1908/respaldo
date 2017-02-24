$(document).ready(function() {
    $('#FTable').DataTable({
  paginate: false
} );
    llamar();
    
    function llamar(){
        $.ajax({
		      url: Routing.generate('consultaAllTransaccion'),
		      type: 'post',
		})
		.done(function(msg) {
//                    $('#listT').html(msg);
                    
		    console.log(msg);
		})
		.fail(function() {
		    console.log("errorConsultaTabla");
		})
		.always(function() {
		    console.log("completeConsultaTabla");
		});
    }
    
    $('#linkpdf').on("click", function(event){
        //$('#FTable');
        return xepOnline.Formatter.Format('listT',
        {
            render:'newwin', 
            pageWidth:'297mm', 
            pageHeight:'210mm',
            embedLocalImages: 'true',
            cssStyle:[
                {fontSize:'6px'}
            ]
        });
        
    });

});


