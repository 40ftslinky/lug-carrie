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

	// L.circle([-37.7978513, 144.9804056], 25000, {
	// 	color: 'rgba(103, 202, 220, 1)',
	// 	fillColor: 'rgba(103, 202, 220, 0.0)',
    //     dashArray: '5',
	// 	fillOpacity: 0.5
	// }).addTo(mymap_melb).bindPopup("Inside the Melbourne delivery area.");

	// control that shows state info on hover
	var infomelb = L.control();

	// infomelb.onAdd = function (mymap_melb) {
	// 	this._div = L.DomUtil.create('div.melb', 'info');
	// 	this.update();
	// 	return this._div;
	// };

	// infomelb.update = function (props) {
	// 	this._div.innerHTML = '<h4>Delivery Area</h4>' +  (props ?
	// 		'<b>' + props.name + '</b><br />' + props.households.toLocaleString("en-US") + ' Households</b><br />' + props.population.toLocaleString("en-US") + ' Viewers'
	// 		: 'Click to test your region');
	// };

	infomelb.addTo(mymap_melb);


	function styleMelb(feature) {
		return {
			// weight: 2,
			opacity: 0.2,
			// color: '#d00000',
			// dashArray: '0',
			// fillOpacity: 0.7,
			// fillColor: getColor(feature.properties.population)
            fillColor: 'rgba(103, 202, 220, 0.0)'
		};
	}

	function highlightFeature(ev) {
		var layermelb = ev.target;

		layermelb.setStyle({
			// weight: 2,
			// opacity: 1,
			// color: 'white',
			// dashArray: '',
			// fillOpacity: 0.2
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layermelb.bringToFront();
		}

		info.update(layermelb.feature.properties);
	}

	var geojsonmelb;

	function resetHighlight(ev) {
		geojsonmelb.resetStyle(ev.target);
		info.update();
	}

	function zoomToFeature(ev) {
		// mymap_melb.fitBounds(ev.target.getBounds());

	 	// delivery_region_selected(ev.target.feature.id);	
        // call to ross custom function
	}

	function onEachFeature(feature, layermelb) {
		layermelb.on({
			// mouseover: highlightFeature,
			// mouseout: resetHighlight,
			click: zoomToFeatureMelb
		});
        // layermelb.bindPopup("This is the "+feature.properties.name+ " region. <br/> <div class='button_wrap_sm'><button class='button btn_small ghost_red'>Learn More</button> <button class='button btn_small red_btn '>Book Region</button></div>");
        // layermelb.bindPopup("You clicked the map at " + ev.latlng.toString());
	}

	geojsonmelb = L.geoJson(deliveryData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(mymap_melb);

    mymap_melb.attributionControl.addAttribution('');


	var popup3 = L.popup();

	function onMapClickMelb(ev) {
		popup3
			.setLatLng(ev.latlng)
			.setContent("You clicked the map at <br>" + ev.latlng.toString())
			.openOn(mymap_melb);
	}
	mymap_melb.on('click', onMapClickMelb);