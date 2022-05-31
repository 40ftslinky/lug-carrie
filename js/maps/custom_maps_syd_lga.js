// custom leaflet / mapbox call

var mapboxAccessToken = 'pk.eyJ1Ijoib21nY3JlYXRpdmUiLCJhIjoiY2t2MXR1aWlkNnB3dzJvdDlvd3hoeHVubyJ9.Lf2kX5YXQ1IB23ZOXvY9VQ';
var sydmap = L.map('map_syd',{
    scrollWheelZoom: false
}).setView([-33.8756125,151.1929], 11);
// starting position [lng, lat]
sydmap.createPane('labels');
sydmap.getPane('labels').style.zIndex = 650;

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'omgcreative/ckv1v7w9o2s0v14s08mj2o91o',
    // mapbox://styles/omgcreative/ckv1v7w9o2s0v14s08mj2o91o
    tileSize: 512,
    zoomOffset: -1
}).addTo(sydmap);

// L.marker([-36.5, 145.5]).addTo(sydmap)
// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

// L.circle([-33.8756125,151.1929], 15500, {
//     color: 'rgba(255, 255, 255, 1)',
//     fillColor: 'rgba(255, 255, 255, 0.2)',
//     dashArray: '5',
//     fillOpacity: 1
// }).addTo(sydmap).bindPopup("Approximately inside the Sydney delivery area.");

// L.polygon([
// 	// [51.509, -0.08],
// 	// [51.503, -0.06],
// 	// [51.51, -0.047]
// ]).addTo(sydmap).bindPopup("I am a polygon.");


// control that shows state info on hover
var info = L.control();

info.onAdd = function (sydmap) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
};

info.update = function (props) {
    this._div.innerHTML = '<h4>Delivery Area</h4>' +  (props ?
        props.name + ' LGA <br>' + props.extra 
        : 'Check your area');
};

info.addTo(sydmap);


// get color depending on population  value
// function getColor(p) {
//     return  p > 7000000 ? '#370617' :
//             p > 5000000 ? '#6a040f' :
//             p > 3000000 ? '#9d0208' :
//             p > 1000000 ? '#d00000' :
//             p > 500000  ? '#dc2f02' :
//             p > 400000  ? '#e85d04' :
//             p > 300000  ? '#f48c06' :
//             p > 200000  ? '#FD8D3C' :
//             p > 100000   ? '#faa307' :
//             p > 50000   ? '#ffba08' :
//                         '#ffc01e';
// }


function style(feature) {
    return {
        weight: 2,
        opacity: 1,
        color: 'rgba(103, 202, 220, 1)',
        dashArray: '5',
        fillOpacity: 0.7,
        // fillColor: getColor(feature.properties.population)
        path: 'rgba(103, 202, 220, 1)',
        fillColor: 'rgba(103, 202, 220, 0.2)',
        fillOpacity: 0.5
    };
}

function highlightFeature(event) {
    var layerSyd = event.target;

    layerSyd.setStyle({
        weight: 5,
        opacity: 1,
        color: 'rgba(103, 202, 220, 1)',
        dashArray: '0',
        fillOpacity: 0.2
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layerSyd.bringToFront();
    }

    info.update(layerSyd.feature.properties);
}

var geojson;

function resetHighlight(event) {
    geojson.resetStyle(event.target);
    info.update();
}

function zoomToFeature(event) {
    sydmap.fitBounds(event.target.getBounds());

     media_region_selected(event.target.feature.id);	
}

function onEachFeature(feature, layerSyd) {
    layerSyd.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight
        // click: zoomToFeature
    });
    layerSyd.bindPopup("This is "+feature.properties.name+ " LGA. <br/> We can deliver to this area. ");
    // .addTo(sydmap_syd).bindPopup("Inside the delivery area.");
}

geojson = L.geoJson(deliveryLGA, {
    style: style,
    onEachFeature: onEachFeature
}).addTo(sydmap);

sydmap.attributionControl.addAttribution(
// 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
// 'Imagery &copy; <a href="https://www.mapbox.com/">Mapbox</a>' + 
'Delivery data &copy; <a href="http://lug-carrie.com.au/">Lug+Carrie</a>');


var popupSyd = L.popup();

function onMapClick(event) {
	popupSyd
		.setLatLng(event.latlng)
        .setContent("You have clicked outside our Sydney service area.<br> Please contact us to discuss further.")
		.openOn(sydmap);
}

sydmap.on('click', onMapClick);