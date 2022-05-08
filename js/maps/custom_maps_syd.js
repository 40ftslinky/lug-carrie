// other examples:
// https://tomik23.github.io/leaflet-examples/#58.control-layers-outside-the-map
// custom leaflet / mapbox call

var mapboxAccessToken = 'pk.eyJ1Ijoib21nY3JlYXRpdmUiLCJhIjoiY2t2MXR1aWlkNnB3dzJvdDlvd3hoeHVubyJ9.Lf2kX5YXQ1IB23ZOXvY9VQ';
var mymap_syd = L.map('map_syd',{
    scrollWheelZoom: false
}).setView([-33.8930692,151.2217638], 11);
// starting position [lng, lat]
mymap_syd.createPane('labels');
mymap_syd.getPane('labels').style.zIndex = 650;

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
    // maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'omgcreative/ckv1v7w9o2s0v14s08mj2o91o',
    // mapbox://styles/omgcreative/ckv1v7w9o2s0v14s08mj2o91o
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap_syd);

// L.marker([-33.8930692,151.2217638]).addTo(mymap_syd)
// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

L.circle([-33.8930692,151.2217638], 8000, {
    color: 'rgba(103, 202, 220, 1)',
    fillColor: 'rgba(103, 202, 220, 0.0)',
    dashArray: '5',
    fillOpacity: 0.5
}).addTo(mymap_syd).bindPopup("Inside the delivery area.");

// control that shows state info on hover
var infosyd = L.control();

infosyd.onAdd = function (mymap_syd) {
    this._div = L.DomUtil.create('div.syd', 'info');
    this.update();
    return this._div;
};

infosyd.update = function (props) {
    this._div.innerHTML = '<h4>Delivery Area</h4>' +  (props ?
        '<b>' + props.name + '</b><br />' + props.households.toLocaleString("en-US") + ' Households</b><br />' + props.population.toLocaleString("en-US") + ' Viewers'
        : 'Check your area');
};

infosyd.addTo(mymap_syd);


function styleSyd(feature) {
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

function highlightFeatureSyd(event) {
    var layersyd = event.target;

    layersyd.setStyle({
        // weight: 2,
        // opacity: 1,
        // color: 'white',
        // dashArray: '',
        // fillOpacity: 0.2
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layersyd.bringToFront();
    }

    info.update(layersyd.feature.properties);
}

var geojsonsyd;

function resetHighlightSyd(event) {
    geojsonsyd.resetStyle(event.target);
    info.update();
}

function zoomToFeatureSyd(event) {
    // mymap_syd.fitBounds(event.target.getBounds());

     // delivery_region_selected(event.target.feature.id);	
    // call to ross custom function
}

function onEachFeatureSyd(feature, layersyd) {
    layersyd.on({
        // mouseover: highlightFeatureSyd,
        // mouseout: resetHighlightSyd,
        click: zoomToFeatureSyd
    });
    // layersyd.bindPopup("This is the "+feature.properties.name+ " region. <br/> <div class='button_wrap_sm'><button class='button btn_small ghost_red'>Learn More</button> <button class='button btn_small red_btn '>Book Region</button></div>");
    layersyd.bindPopup("You clicked the map at " + event.latlng.toString());
}

geojsonsyd = L.geojson(deliveryData, {
    style: styleSyd,
    onEachFeatureSyd: onEachFeatureSyd
}).addTo(mymap_syd);

mymap_syd.attributionControl.addAttribution('Delivery data &copy; Lug+Carrie');


var popup2 = L.popup();

function onMapClickSyd(event) {
    popup2
        .setLatLng(event.latlng)
        .setContent("You clicked the map at <br>" + event.latlng.toString())
        .openOn(mymap_syd);
}
mymap_syd.on('click', onMapClickSyd);