$(document).ready(function() {
    
    $.validator.addMethod("money", function(value, element) {
            var isValidMoney = /^-?(?:\d+|\d{1,3}(?:\.\d{3})+)(?:,\d+)?$/.test(value);
            return this.optional(element) || isValidMoney;
        },
        "Ingrese un valor monetario (0 or 0,00)"
    );
 
    $( "form[name='pago']" ).validate({
        rules: {
            "pago[tasapago]": {
              required: true,
              number: true,
              min:0,
              max:100
            },
            "pago[metodopago]": {
              required: true
            },
            "pago[numerocuotas]": {
              required: true,
              minlength: 1
            },
            "pago[primapago]": {
              required: true
            },
            "pago[porcentajecomisionpago]": {
              required: true,
              number: true,
              min:0,
              max:100
            },
            "pago[comisionpago]": {
              required: true,
              money:true
            }
        },
        messages: {
            "pago[tasapago]": {
              required: "Ingresa una tasa de pago.",
              number : "Ingresa un valor numérico.",
              max: $.validator.format( "Ingresa una tasa de pago menor o igual a {0}." ),
	      min: $.validator.format( "Ingresa una tasa de pago mayor o igual al {0}." )
            },
            "pago[metodopago]": {
              required: "Seleccione un método de pago"
            },
            "pago[numerocuotas]": {
              required: "Ingrese el numero de cuotas",
              minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            "pago[primapago]": {
              required: "Ingrese la prima del pago"
            },
            "pago[porcentajecomisionpago]": {
              required: "Ingrese el porcentaje de comision del pago",
              number : "Ingresa un valor numérico.",
              max: $.validator.format( "Ingresa un porcentaje de comision de pago menor o igual a {0}." ),
	      min: $.validator.format( "Ingresa un porcentaje de comision de pago mayor o igual al {0}." )
            },
            "pago[comisionpago]": {
              required: "Ingrese la comision del pago"
            }
        }
    });
});


