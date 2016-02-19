// JavaScript Document
$(window).load(function() {
	$("#establecimiento").change(function(){
		activarSiguiente(this);// funcio que activa el siguiente --> combos anidados
		$("#reserva").fadeIn();
		res = $(this).val();
		$.ajax({
				  type:"POST",
				  url: "php/ajaxCoord.php",
				  data: "res="+res,
				  dataType: "html",
				  error: function(){
						alert("Algo salio mal reintente en breve");
				  },
				  success: function(data){                                                      
						$("#cord").html(data);
				  }
			  });
		});
	$("select#cord").change(function(){//selecciona sucursal del/o establecimiento
		enviaCoord($(this).val())
		})
		
		

	$("#fecha").change(function(){
		f = $("#fecha").val()
		h = $("#horarioReserv").val()
		m = $("select#mesaPara").val()
	//	posibilidad(f);
	})	
	$("#horarioReserv").change(function(){
		f = $("#fecha").val()
		h = $("#horarioReserv").val()
		m = $("select#mesaPara").val()

		//posibilidad(f,h,m);
	})	
	$("select#mesaPara").change(function(){//selecciona la opcion Mesa para...
		f = $("#fecha").val()
		h = $("#horarioReserv").val()
		m = $("select#mesaPara").val()

		seleccionMesa(this);
		posibilidad(f,h,m);
	})	

	
	$("#formulario").submit(function(){

	bandera = 1;	
	establecimiento = $(this).find('#establecimiento').val();

	sucursalEntera = $(this).find('#cord').val();
	var sucursalDividida = sucursalEntera.split(",");
	
	fechaOrden = $(this).find('#fecha').val();
	horaOrden = $(this).find('#horarioReserv').val();
	mesaPara = $(this).find('#mesaPara').val();
	nombre = $(this).find('#nombre').val();
        //aqui adicione variables no se me falta otro lado
		apellido = $(this).find('#apellido').val();
        cedula = $(this).find('#cedula').val();
        telefono = $(this).find('#telefono').val();
        mail = $(this).find('#mail').val();
        forma_pago = $(this).find('#forma_pago').val();
		
		//alert(apellido+' -'+ cedula+' -'+ telefono+' -'+ mail+' -'+ forma_pago)
	
		$.ajax({
			  type:"POST",
			  url: "php/reservacion.php",
			  // aqui tambien las puse
			  
			  data: "bandera="+bandera+"&establecimiento="+establecimiento+"&sucursal="+sucursalDividida[3]+"&fechaOrden="+fechaOrden+
			  		"&horaOrden="+horaOrden+"&mesaPara="+mesaPara+"&nombre="+nombre+
                                "&apellido="+apellido+"&cedula="+cedula+"&telefono="+telefono+"&mail="+mail+"&forma_pago="+forma_pago,
			  dataType: "html",
			  error: function(){
					alert("Algo salio mal reintente en breve");
			  	},
			  success: function(data){                                                      
					$("#mostrario").html(data);
			  	}
			  });
		return false
		});
});


$("#consul").submit(function(){
	bandera = 3;
	ced = $(this).find("#ced").val();

$.ajax({
			  type:"POST",
			  url: "php/reservacion.php",
			  data: "bandera="+bandera+"&ced="+ced,
			  dataType: "html",
			  error: function(){
					alert("Algo salio mal reintente en breve");
			  	},
			  success: function(data){                                                      
					$("#mireserva").html(data);
			  	}
			  });
		return false

});


function seleccionMesa(t){
para = $(t).val();
$(".mesas>span").removeClass('pushed').removeClass('selected').css('opacity',0.3);
$(".mesas").find("span.mesa"+para).addClass('pushed');
$(".msg").html("Escoja una de las mesas pintadas habilitadas").fadeIn();

$(".pushed").click(function(event){
	if($(this).hasClass("pushed")){
		$(".mesas>span").removeClass('selected')//remuevo clase selected para escoger la otra mesa
		$(this).addClass('selected');// le agrego clase selected a la que le di click
		$(".msg").html("Su mesa escogida se pinta en gris");
		}
	});
}

function enviaCoord(t){
	//var coords = document.getElementById("cord").value;
			var coord = t.split(",");
			initialize(coord[0], coord[1], coord[2], coord[3]);
	}
function activarSiguiente(t){
	$('div#cargando').fadeIn().delay(500).fadeOut(); //pantalla transitoria de cargando, 
	$(t).next().fadeIn();//muestrese siguiente select si hice change en select en cuestion.
	}	
function enviarDatos(a,b,c,d,e){
	var ini = d.split(":"); //convierto la variable de hora ej:9:00:00 y la hago un arreglo separado por : , para tomar el 9 solo;
	var fin = e.split(":");// lo mismo con la hora de fin

	$('#horarioReserv, #mesaPara').html('<option value="">Seleccione una opcion</option>');//vacia el select antes de ponoer nuevos options
	$('#horarioAtencion>span').html('De '+d+' a'+e);//Pongo horario de atencion del establecimiento

	counterPer = 1;//pongo cuantas personas coemran ej: si restaurante tiene un maximo de 5, pongo options del 1 al 5
	while(counterPer <= c){
		$('#mesaPara').append('<option>'+counterPer+'</option>');
		counterPer++;
		}
	c =ini[0];//pongo horarios segun lo que arrojó la base,ej para cocolon de 9:00 a 20:00 voy saltando de hora en hora
	x = fin[0];
	while(c<= x){
	   	$('#horarioReserv').append('<option>'+c+':00:00</option>')
		c++;
		}
	}	
function posibilidad(f,h,m){
	bandera = 2;
	$.ajax({
			  type:"POST",
			  url: "php/reservacion.php",
			  data: "bandera="+bandera+"&fecha="+f+"&hora="+h+"&mesa="+m,
			  dataType: "html",
			  error: function(){
					alert("Algo salio mal reintente en breve");
			  	},
			  success: function(data){                                                      
					$("#mostrario").html(data);
			  	}
			  });
		return false
	}	
	
function borra(t){
	var numerito = $(t).parent().parent().find('span:first-child>input').val();
	bandera = 4;
	$.ajax({
			  type:"POST",
			  url: "php/reservacion.php",
			  data: "bandera="+bandera+"&numerito="+numerito,
			  dataType: "html",
			  error: function(){
					alert("Algo salio mal reintente en breve");
			  	},
			  success: function(data){                                                      
					$("#mostrario").html(data);
					$(t).parent().parent().fadeOut();
			  	}
			  });
		return false
	}	

function modifica(t){
	var numerito = $(t).parent().parent().find('span:first-child>input').val();
	var nopersonas = $(t).parent().parent().find('input#nop').val();
	var nombre = $(t).parent().parent().find('input#nom').val();
	bandera = 5;
	$.ajax({
			  type:"POST",
			  url: "php/reservacion.php",
			  data: "bandera="+bandera+"&numerito="+numerito+"&nopersonas="+nopersonas+"&nombre="+nombre,
			  dataType: "html",
			  error: function(){
					alert("Algo salio mal reintente en breve");
			  	},
			  success: function(data){                                                      
					$("#mostrario").html(data);
				}
			  });
		return false
	}
