		$(document).ready(function(){
			load(1);
			loadx(1);
			loaddds(1);
			select(1);
			  select(1);
			  $("#gb").load("barra.php");
			   $("#gp").load("pastel.php");
		});

		


function barra(){
$("#gb").load("barra.php");			
}

function pastel(){
   $("#gp").load("pastel.php");
}

//setInterval(function(){ loaddds(1); }, 500);

function alert(){
	$.get("ajax/alert.php", {}, function(data){
  if(data!=""){ 
  $(".outer_div_2").html(data);  
  $('#alert').modal();
  }
    })
}

setInterval(function(){ alert(1); }, 9000);

$( "#seg" ).submit(function( event ) {
	var inputFileImage = document.getElementById("exampleInputFile");
	var nom=$('#nomb').val();
	var tip=$('#tipo').val();
	var descripcion=$('#descripcion').val();
	var cd=$('#cd').val();
	var cdd=$('#cdd').val();

var file = inputFileImage.files[0];
 var parametros = $(this).serialize();
 var data = new FormData();
data.append('exampleInputFile',file);

	$.ajax({
						url: "ajax/seguimiento.php?cd="+cd+'&nom='+nom+'&tip='+tip+'&descripcion='+descripcion+"&cdd="+cdd,        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#resultados_ajax11").html(data);
							pastel();
							barra();
							loaddds(1);
							
						}
					});	
  event.preventDefault();
})

function vista(id){
alert(id);
}

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_proyectos.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					barra();
					pastel();
					
				}
			})
		}

		
function loadx(page){
			var q= $("#q").val();
			var cx= $("#cx").val();
			$.ajax({
				url:'./ajax/buscar_proyectos_p.php?action=ajax&page='+page+'&q='+q+'&c='+cx,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_divx").html(data).fadeIn('slow');
					$('#loader').html('');
					barra();
					pastel();
					
				}
			})
		}

	function loa(){
		var cod=$('#codigo').val();
		if(cod==""){
			document.getElementById("inv_g").style.display="none";
			document.getElementById("est_g").style.display="none";

		}else{
			document.getElementById("inv_g").style.display="block";
			document.getElementById("est_g").style.display="block";
				

		}

		 $('#c').val(cod);
		 $('#ce').val(cod);
		
	}
$('#inv_g').click(function(){
 loadd(1);
 	$('#codigo').attr("disabled", true);
 	
})
$('#est_g').click(function(){
 loadd(1);
 	$('#codigo').attr("disabled", true);

})

function select(cod){
	var cd=$('#cd').val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/select.php?cd='+cd,
				 beforeSend: function(objeto){
			  },
				success:function(data){
					$("#nomb").html(data).fadeIn('slow');
					
				}
			})
		}

function loadd(page){
	var c=$('#c').val();
			var qq= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_inv.php?action=ajax&page='+page+'&qq='+q+'&c='+c,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div2").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

		

function loaddd(page){
	var ce=$('#c').val();
			var qq= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_est.php?action=ajax&page='+page+'&qq='+q+'&ce='+ce,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div3").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}


		function loaddds(page){
	var ce=$('#cdd').val();
			var qq= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_seguimiento.php?action=ajax&page='+page+'&qq='+qq+'&ce='+ce,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div11").html(data).fadeIn('slow');
					$('#loader').html('');
				}
			})
		}

	
		
	
$( "#guardar_proyecto" ).submit(function( event ) {
 var parametros = $(this).serialize();
 var co=$('#codigo').val();
 var fin=$("#fecha_fin").val();
 var ini=$("#fecha_ini").val();
 var grupos=$("#grupos").val();
  var programa=$("#pr").val();

 if(fin>ini){
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_proyecto.php?codigo="+co+"&grupos="+grupos,
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
	 }else{
	 	$("#resultados_ajax").html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error!</strong> Verifique las fecha del cronograma.</div>');
	 }
  event.preventDefault();
})

$( "#a_inv" ).click(function( event ) {
  var investigado=$('#browsers').val();
  var ro=$('#rol').val();
  var cc=$('#c').val();
 if(ro=='Inv Principal'){
 	$('#in').hide();
 	$('#rol').val('Coinvestigador');
 }
	 $.ajax({
			type: "POST",
			url: "ajax/inv.php",
			 data : {investigador:investigado, rol:ro, c:cc},
			 beforeSend: function(objeto){
				$("#resultados2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados2").html(datos);
			$('#a_inv').attr("disabled", false);
			loadd(1);
		  }
	});
  event.preventDefault();
})

$( "#a_est" ).click(function( even) {
  var cod=$('#ce').val();
  var estudiant=$('#estudiante').val();
  if(estudiant==""){
  	$('#estudiante').attr("disabled", true);
  }
$.ajax({
			type: "POST",
			url: "ajax/est.php",
		 data : {ce:cod, estudiante:estudiant},
			 beforeSend: function(objeto){
				$("#resultados3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados3").html(datos);
			$('#a_est').attr("disabled", false);
			loaddd(1);

			 ///$("#estudiante").load("ajax/select_est.php", {codd:cod});


		  }
	});
  even.preventDefault();
})

function des(archivo){
			  $.ajax({
			type: "POST",
			url: "ajax/download.php?documento="+archivo,
			 beforeSend: function(objeto){
				$("#resultados3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
		  }
	});
			  }
  

$( "#editar_proyecto" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_proyecto.php",
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

function obtener(codigo, rol){
			loaddds(1);
			if(rol=='Inv Principal'){
				$('#seg').fadeIn();
				$('.modal-footer').fadeIn();
			}
			if(rol=='Coinvestigador'){
				$('#seg').fadeOut();
				$('.modal-footer').fadeOut();
			}
			var cod = $("#cod"+codigo).val();
			$("#cd").val(codigo);
			select(cod);
		}

function segg(codigo){

		var cod = $("#cod"+codigo).val();
		var codd = $("#codigo"+codigo).val();
			$("#cd").val(codigo);
			$("#cdd").val(codd);
			loaddds(1);
			select(codigo);

}

	function obtener_datos(id){
		load(1);
			var nombre = $("#nombre"+id).val();
			var codigo = $("#codigo"+id).val();
				var estado = $("#estado"+id).val();
			var presupuesto = $("#presupuesto"+id).val();
			var cod = $("#cod"+id).val();
			
	
			$("#mod_nombre").val(nombre);
			$("#mod_estado").val(estado);
			$("#mod_codigo").val(codigo);
			$("#mod_cod").val(cod);
			$("#mod_presupuesto").val(presupuesto);
			$("#mod_id").val(id);
		
		}
	
		
		

 $("#grupos").change(function () {    
             var opp = $('#grupos').val();
          $.post("ajax/select_.php",
  {id: opp},
  function(data){
   $('#pr').html(data);
  });
        })