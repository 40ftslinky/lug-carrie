// custom leaflet / mapbox call

    var mapboxAccessToken = 'pk.eyJ1Ijoib21nY3JlYXRpdmUiLCJhIjoiY2t2MXR1aWlkNnB3dzJvdDlvd3hoeHVubyJ9.Lf2kX5YXQ1IB23ZOXvY9VQ';
    var mymap_melb = L.map('map_melb',{
		scrollWheelZoom: false
	}).setView([-37.7978513, 144.9804056], 10);
	// starting position [lng, lat]
	mymap_melb.createPane('labels');
	mymap_melb.getPane('labels').style.zIndex = 650;

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
		// maxZoom: 18,
		attribution: '',
		id: 'omgcreative/ckv1v7w9o2s0v14s08mj2o91o',
        // mapbox://styles/omgcreative/ckv1v7w9o2s0v14s08mj2o91o
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap_melb);

	L.marker([-37.7978513, 144.9804056]).addTo(mymap_melb)
		.bindPopup("<b>Lug+Carrie</b><br />Head Office.").openPopup();

	
    mymap_melb.attributionControl.addAttribution(
	'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
	'Imagery &copy; <a href="https://www.mapbox.com/">Mapbox</a>, ' + 
	'Details &copy; <a href="http://lug-carrie.com.au/">Lug+Carrie</a>');


	var popup3 = L.popup();

	function onMapClickMelb(ev) {
		popup3
			.setLatLng(ev.latlng)
			.setContent("You clicked the map at <br>" + ev.latlng.toString())
			.openOn(mymap_melb);
	}
	mymap_melb.on('click', onMapClickMelb);