		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_miembros.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

	function alert(){
	$.get("ajax/alert.php", {}, function(data){
  if(data!=""){ 
  $(".outer_div_2").html(data);  
  $('#alert').modal();
  }
    })
}

setInterval(function(){ alert(1); }, 9000);

		
		
	
$( "#guardar_miembros" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_miembro.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_estudiante" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_miembro.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

	function obtener_datos(id){
			var nombre = $("#nombre"+id).val();
			var apellidos = $("#apellidos"+id).val();
			var cedula = $("#cedula"+id).val();
			var grupo = $("#grupo"+id).val();
			var rol = $("#rol"+id).val();
			
	
			$("#mod_nombre").val(nombre);
			$("#mod_apellidos").val(apellidos);
			$("#mod_cedula").val(cedula);
			$("#mod_grupo").val(grupo);
			$("#mod_rol").val(rol);
			$("#mod_id").val(id);
		
		}
	
		
		

