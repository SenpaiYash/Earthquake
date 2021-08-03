var map = L.map('map').setView([1, 2], 1);

var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
})

osm.addTo(map);


//To import Data to Map
fetch('https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00')
    .then(function(response){
        return response.json();
    })
    .then (function(data){
      L.geoJSON(data).addTo(map).bindPopup(function (layer) {
        return layer.feature.properties.title;
    }).addTo(map);
    });

    
    var greenIcon = new L.Icon({
        iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });

  var marker = L.marker([-20.20665, 57.6755],{icon: greenIcon}).addTo(map);

  marker.bindPopup("You are Safe!!");

  var circle = L.circle([-20.20665, 57.6755],{color:'red', fillColor:'#f03', radius:1000000, fillOpacity:0.5}).addTo(map);


//   var myGeoJson = 'https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00';
  
//   var geojson = L.geoJSON(myGeoJson).addTo(map);

   

   
