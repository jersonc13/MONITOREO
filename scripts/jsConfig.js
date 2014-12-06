var local = window.location.hostname;
var url = "http://"+local+"/MONITOREO/dashboard/index/verificarContadores";



setInterval(actualizarindicadores, 6000);

function actualizarindicadores() {
	
	$.ajax({
		url:url,
		type:'post',
		cache:false,
		type:'json',
		success:function(data){
			json = JSON.parse(data);
			$("#contador_bandeja").html( json.bandeja_count[0].bandeja_count );
			
			$("#incidencias_asignadas").html("Tienes "+ json.cargarincidencias[0].incidenciacount+" incidencia asignadas" );
			$("#incidencias_revisar").html( "Tienes "+json.cargarincidenciasasig[0].incidenciacount2+" incidencia por revisar" );
			var total = json.cargarincidencias[0].incidenciacount + json.cargarincidenciasasig[0].incidenciacount2 ;
			$("#requerimiento_total").html( total );
		},
		error:function(er){
			console.log(er.statusText);
			alert("Houston, tenemos un problema... Creo que has roto algo...");
		}
	});
	
	
}