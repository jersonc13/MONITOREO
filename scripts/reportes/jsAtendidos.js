$(function(){
	$('#txtfechaini').datepicker({
	    language: 'es'
	    ,format: 'dd/mm/yyyy'
	    // ,startDate: '1d'
	});
	$('#txtfechafin').datepicker({
	    language: 'es'
	    ,format: 'dd/mm/yyyy'
	    // ,startDate: '1d'
	});


	$("#btnIncidencias").bind({
	    click:function(evt){
	        evt.preventDefault();
	        get_page('repincidencia/vistaIncidencias', 'carga_reportes');
	    }
	});
})
function verReporte(){
	var find = '/';
	var re = new RegExp(find, 'g');
	// console.log(re);
	var fechaini = $('#txtfechaini').val();
	var estado = $('#cboEstado option:selected').val();
	var fechaini2 = fechaini.replace(re, '-');
	// console.log(fechaini2);
	var fechafin = $('#txtfechafin').val();
	var fechafin2 = fechafin.replace(re, '-');
	// console.log(fechafin2);
	var hostname = window.location.host;
	var url = 'http://' + hostname + '/MONITOREO/reportes/repincidencia/verAtendidos/' + fechaini2 + '/' + fechafin2 +'/'+estado+ '/';
	window.open(url,'_blank');
	// console.log(url);
	// var iframe = '<iframe src="'+url+'" width="800" height="281" frameborder="0" ></iframe>';
	// $("#pnlIframe").html(iframe);
	// return true;
	// $("pnlIframe").html(iframe, function(){
	//     //stuff to do after the iframe has loaded
	// });
}
// function loadIncidencia(){
// 	getpa
// }