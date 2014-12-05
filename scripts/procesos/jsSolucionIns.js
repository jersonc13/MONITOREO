$(function(){
	$("#btnregistro").bind({
		click:function(evt){
			evt.preventDefault();
			var valor = $("#registraSolucion").val();
			if (valor != "") {
				registraSolucion();        	
			}else{
				alert("Completar los datos");
			}
		}
	});
	$(".cancelarsolucion").bind({
	    click:function(evt){
	        evt.preventDefault();
	        get_page('bandejatecnico/vistaGet/BANDEJAMISCASOS_realiza', 'qry_casos_asignados');
	    }
	});
});

function registraSolucion(){
	$.ajax({
		type: "POST",
		url: "bandejatecnico/solucionar",
		data: { 
			cod      : $("#txtcodx").val(),
			solucion : $("#txtsolucion").val()
		},
		success: function(data) {
			if (data == '1') {
				alert("Datos ingresados correctamente");
				document.getElementById("frmSolucionIns").reset();
			} else if(data=='3'){
				alert("Ocurrio un Error al crear el Usuario");
			}else{
				alert("Error General!! al ingresar los datos");
			}
		},
		error: function(data) {
			alert("Error al ingresar los datos");
		}
	});
}

function regresa_pantalla(){
	get_page('bandejatecnico/vistaGet/BANDEJAMISCASOS_realiza', 'qry_casos_asignados');
}