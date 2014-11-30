$(function(){
	// alert("Ready Go!");
	$("#cabecera_resultados").hide();
	$("#cabecera_tiempo_busqueda").hide();
	$("#btnBuscarTrabajador").bind({
		click:function(evt){
			evt.preventDefault();
			BuscarTrabajador();
		}
	});
});

function BuscarTrabajador(){
	var terminoBuscar = $("input[name=txttrabajador]").val();
	$("#panelAsignacion").hide();	
	$.ajax({
		url:'../buscarTrabajador',
		type:'post',
		cache:false,
		data:{ name: terminoBuscar },
		success:function(json){
			if (json!=0){
				json = JSON.parse(json);
				var cabecera = json.cantidad+' resultados encontrados para: <span class="text-navy">“'+terminoBuscar+'”</span>';
				var tiempo = 'Ejecución ('+json.tiempo+' seconds)';
				$("#cabecera_resultados").html(cabecera);
				$("#cabecera_tiempo_busqueda").html(tiempo);
				$("#cabecera_tiempo_busqueda").show();
				$("#cabecera_resultados").show();
	    		// recorremos los trabajadores encontrados
	    		var html_personas;
	    		$("#panel_resultados").html('');
	    		$.each( json.personas , function( index, value ){
	    			html_personas = '<div class="hr-line-dashed"></div>';
	    			html_personas += '<div class="search-result">';
	    			html_personas += ' <h3><a href="#" onclick="obtenerRequerimientoPersona('+value.nPerId+');">'+value.Nombres+'</a></h3>';
	    			html_personas += ' <a href="#" class="search-link" onclick="obtenerRequerimientoPersona('+value.nPerId+');" >'+value.cPerEmail+'</a>';
	    			html_personas += ' <p><button class="btn btn-outline btn-primary dim" type="button" onclick="obtenerRequerimientoPersona('+value.nPerId+');" ><i class="fa fa-check"></i></button></p>';
	    			html_personas += '</div>';
	    			$("#panel_resultados").append(html_personas);

	    		});
	    		$("#panel_resultados").show();
	    		// console.log(json);	    		
	    	}else{
	    		alert("Lo sentimos no encontramos resultados...");
	    	}

	    },
	    error:function(er){
	    	console.log(er.statusText);
	    	alert("Houston, tenemos un problema... Creo que has roto algo...");
	    }
	});	
}
function obtenerRequerimientoPersona(id){
	$("#txtcodigoPersona").val(id);
	var idr = $("#txtcodigoRequerimiento").val();
	$.ajax({
		url:'../verasignarTrabajador',
		type:'post',
		cache:false,
		data:{
			idReq : idr,
			idPerResp : id
		},
		success:function(data){
			$("#panel_resultados").hide();
			$("#panelAsignacion").html(data);			
			$("#panelAsignacion").show();
			// console.log(data);
		},
		error:function(er){
			console.log(er.statusText);
			alert("Houston, tenemos un problema... Creo que has roto algo...");
		}
	});
}
function cancelarAsigna(){
	$("#panelAsignacion").hide();			
	$("#panel_resultados").show();
}
function AsignarRequerimiento(){
	var idPer = $("#txtcodigoPersona").val();
	var idPerSolicit = $("#txtnPeridSolicita").val();
	var idReq = $("#txtcodigoRequerimiento").val();	
	var observa = $("#txtobserva").val();	
	$.ajax({
	    url:'../AsignarRequerimiento',
	    type:'post',
	    cache:false,
	    data:{
	    	idPer:idPer,
	    	idPerSolicit:idPerSolicit,
	    	idReq:idReq,
	    	observa:observa
	    },
	    success:function(data){
	    	if (data == '1') {
	    	    alert("Datos ingresados correctamente");
	    	    window.location.href='../bandeja';
	    	} else if(data=='3'){
	    	    alert("Ocurrio un Error al asignar ");
	    	}else{
	    	    alert("Error General!! al ingresar los datos");
	    	}	
	    },
	    error:function(er){
	    	console.log(er.statusText);
	        alert("Houston, tenemos un problema... Creo que has roto algo...");
	    }
	});
	
	
}