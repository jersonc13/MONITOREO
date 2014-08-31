$(function(){
	initializeMap();
});

var marker, myCircle, map;
function initializeMap() {
	var mapOptions = {
		center: new google.maps.LatLng(-8.1166667, -79.0333333),
		zoom: 13
	};
	map = new google.maps.Map(document.getElementById("mapa-latitud"),
		mapOptions);

	google.maps.event.addListener(map, 'click', function(event){
		addMarker(event.latLng);
	});
}
function updateMap(latLng){
	console.log("Actualizando");
	console.log(latLng);
	$("input[name=txtlatitud]").val( latLng.lat() );
    $("input[name=txtlongitud]").val( latLng.lng() );
}
function addMarker(latLng){       
    //clear the previous marker and circle.
    if(marker != null){
    	marker.setMap(null);
    }
    console.log(latLng);
    marker = new google.maps.Marker({
    	position: latLng,
    	draggable:true,
    });
    // para agregar el marcardor, llamar a setMap();
    $("input[name=txtlatitud]").val( latLng.lat() );
    $("input[name=txtlongitud]").val( latLng.lng() );
    google.maps.event.addListener(
        marker,
        'drag',
        function(event) {
        	updateMap(event.latLng);
        }
    );    
	marker.setMap(map);
}