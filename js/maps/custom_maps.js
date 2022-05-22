// custom leaflet / mapbox call

    var mapboxAccessToken = 'pk.eyJ1Ijoib21nY3JlYXRpdmUiLCJhIjoiY2t2MXR1aWlkNnB3dzJvdDlvd3hoeHVubyJ9.Lf2kX5YXQ1IB23ZOXvY9VQ';
    var melbmap = L.map('map',{
		scrollWheelZoom: false
	}).setView([-37.7978513, 144.9804056], 10);
	// starting position [lng, lat]
	melbmap.createPane('labels');
	melbmap.getPane('labels').style.zIndex = 650;

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
		// maxZoom: 18,
		attribution: '',
		id: 'omgcreative/ckv1v7w9o2s0v14s08mj2o91o',
        // mapbox://styles/omgcreative/ckv1v7w9o2s0v14s08mj2o91o
		tileSize: 512,
		zoomOffset: -1
	}).addTo(melbmap);

	L.marker([-37.7978513, 144.9804056]).addTo(melbmap)
		.bindPopup("<b>Lug+Carrie</b><br />Head Office.").openPopup();

	var circle2 = L.circle([-37.7978513, 144.9804056], 40000, {
		color: 'rgba(103, 202, 220, 1)',
		fillColor: 'rgba(103, 202, 220, 0)',
        dashArray: '5',
		fillOpacity: 1,
		zIndex: 11
	}).addTo(melbmap).bindPopup("Inside the Melbourne 40km <br>service area.");

	var circle = L.circle([-37.7978513, 144.9804056], 25000, {
		color: 'rgba(103, 202, 220, 1)',
		fillColor: 'rgba(103, 202, 220, 0.1)',
        dashArray: '5',
		fillOpacity: 1,
		zIndex: 111
	}).addTo(melbmap).bindPopup("Inside the Melbourne 25km <br>service area.");

	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (melbmap) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h4>Delivery Area</h4>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.households.toLocaleString("en-US") + ' Households</b><br />' + props.population.toLocaleString("en-US") + ' Viewers'
			: 'Click to test your region');
	};

	info.addTo(melbmap);


	function style(feature) {
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

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			// weight: 2,
			// opacity: 1,
			// color: 'white',
			// dashArray: '',
			// fillOpacity: 0.2			
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		// melbmap.fitBounds(e.target.getBounds());

	 	// delivery_region_selected(e.target.feature.id);	
        // call to ross custom function
	}

	function onEachFeature(feature, layer) {
		layer.on({
			// mouseover: highlightFeature,
			// mouseout: resetHighlight,
			click: zoomToFeature
		});
        // layer.bindPopup("This is the "+feature.properties.name+ " region. <br/> <div class='button_wrap_sm'><button class='button btn_small ghost_red'>Learn More</button> <button class='button btn_small red_btn '>Book Region</button></div>");
        // layer.bindPopup("You clicked the map at " + e.latlng.toString());
	}

	// geojson = L.geoJson(deliveryData, {
	// 	style: style,
	// 	onEachFeature: onEachFeature
	// }).addTo(melbmap);

    // melbmap.attributionControl.addAttribution('');


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			// .setContent("You clicked the map at <br>" + e.latlng.toString())
			.setContent("You have clicked outside the 40km range of our service.<br> Please contact us to discuss further.")
			.openOn(melbmap);
	}
	melbmap.on('click', onMapClick);