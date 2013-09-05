/**
 * @author Jonathan Araul
 */

$(".boton_enviar_guardar_seguros").live("click", function() {


	if ( $('#input_seguros_guardar') ) 
	{
		////////////////////Captura de vaiables

		var modulo = 'seguros';

		var nombre_seguro 		= $('#nombre_seguro').val();
		var poliza_seguro 		= $('#poliza_seguro').val();
		var vig_desde_seguro 	= $('#vig_desde_seguro').val();
		var vig_hasta_seguro    = $('#vig_hasta_seguro').val();
		var codigo_seguro		= $('#codigo_seguro').val();

		var data = 'modulo='+modulo+
		'&nombre_seguro='+nombre_seguro+'&poliza_seguro='+poliza_seguro+'&vig_desde_seguro='+vig_desde_seguro+
		'&vig_hasta_seguro='+vig_hasta_seguro+'&codigo_seguro='+codigo_seguro;


	$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
	});
}

});

$('.boton_enviar_guardar_responsable').live("click", function() {

	if($('#input_responsable_guardar')) {

////////////////////Captura de vaiables

		var modulo = 'responsable';

		var nombre_responsable 					= $('#nombre_responsable').val();
		var cedula_responsable 					= $('#cedula_responsable').val();
		var descripcion_cargo_responsable 		= $('#descripcion_cargo_responsable').val();

		var data = 'modulo='+modulo+'&nombre_responsable='+nombre_responsable+'&cedula_responsable='+cedula_responsable
		+'&descripcion_cargo_responsable='+descripcion_cargo_responsable;

		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
	});
	};
});


$('.boton_enviar_guardar_direccion').live("click", function() {

	if ($('#input_direccion_guardar')) {

		var modulo = 'direccion';

		var nombre_direccion 		= $('#nombre_direccion').val();
		var nombre_director 		= $('#nombre_director').val();
		var codigo_direccion 		= $('#codigo_direccion').val();

		var data = 'modulo='+modulo+'&nombre_direccion='+nombre_direccion+'&nombre_director='+nombre_director
		+'&codigo_direccion='+codigo_direccion;

		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
	});
	};
});

$('.boton_enviar_guardar_coordinacion').live("click", function() {

	if ($('#input_coordinacion_guardar')) {

		var modulo = 'coordinacion';

		var nombre_coordinacion 		= $('#nombre_coordinacion').val();
		var nombre_coordinador 			= $('#nombre_coordinador').val();
		var codigo_coordinacion 		= $('#codigo_coordinacion').val();

		var data = 'modulo='+modulo+'&nombre_coordinacion='+nombre_coordinacion+'&nombre_coordinador='+nombre_coordinador+'&codigo_coordinacion='+codigo_coordinacion;

		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
		});
	};
});

$(".boton_enviar_guardar_faltantes").live("click", function() {

	if ($('#input_faltantes_guardar')) {

		var modulo = 'faltantes';

		data = 'modulo='+modulo;

		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
		});
	};
});

$('.boton_enviar_guardar_movimientos').live("click", function() {

	if ($('#input_input_movimientos_guardar_guardar')) {

		var modulo = 'movimientos';
		data = 'modulo='+modulo;

		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
		});
	};	
});

$('.boton_enviar_guardar_nombre_rcuentas').live("click", function() {

	if ($('#input_nombre_rcuentas_guardar')) {

		var modulo = 'resumen_cuentas';
		data = 'modulo='+modulo;
		
		$.ajax({
		type : "POST",
		url : guardar,
		data : data,
		dataType : "json",
		success : function(data) {
		
			// console.log(data.variable);
	 	
		}
		});
	};	
});