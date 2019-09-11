   var myColor = 'yellow';
var oak = document.getElementById("yo");





   // change the set view section to match setting that you created in TileMill under the wrench icon .setView([lat, long], initial zoom level)
     // .setView([43.0760,-89.3816], 12).maxZoom(12);
    var map = L.map('map',{
    // change the set view section to match setting that you created in TileMill under the wrench icon 
      ////constrain how far they will be able to zoom into the map
      maxZoom: 13,
      minZoom: 10,
      
      //max bounds: [[southLat,westLong],[northLat,eastLong]]
      //TileMill Set bounds box:  westLong,southLat,eastLong,northLat  
      //example this from tile mill go to the below example -89.5142,42.9715,-89.2354,43.1541 
       maxBounds:[ [45,-95],[43,-89]]
    // .setView([center], zoom); // .setView([lat, long], initalZoom level)
    }).setView([ 43.4141,-89.9279], 10);

 
      
  L.tileLayer(
  //change the tile set to point to your tiles. After the v/3 insert the name of your mapbox account and id of tiles. 'http://a.tiles.mapbox.com/v3/YOUR_TILE_NAME/{z}/{x}/{y}.png')
  'http://a.tiles.mapbox.com/v3/bianchimfb.matt/{z}/{x}/{y}.png',{
  
     // beetwen the '' incert the name and links to all of your data sources. use <a> tags to link to websites as needed
     attribution: 'Made with: <a href="http://mapbox.com">TileMill</a> Map data: <a href="http://dnr.wi.gov/maps/gis/metadata.html">Wisconsin DNR</a>'
  }).addTo(map);




// var info = L.control();
// info.onAdd = function (map) {
// this._div = L.DomUtil.create('div', 'info');
// return this._div;
// };




 var greenIcon

function setStuff(x) {
 
    if (x === oak ){
      alert("yo")

    
     greenIcon = L.icon({
   
    iconUrl: 'images/thumbs/img/aspenR.png',

    iconSize:     [24, 24], // size of the icon
   
    iconAnchor:   [12, 12], // point of the icon which will correspond to marker's location
    
    popupAnchor:  [-3, -12] // point from which the popup should open relative to the iconAnchor
    
   
});
    L.marker([43.4339981, -89.8932037], {icon: greenIcon}).addTo(map);
     } 
    
 
}

function on(x)
{
var oak = document.getElementById("yo");

icon = setStuff(document.getElementById("yo"));



}

function off(x)
{
alert('off')

L.marker([43.4339981, -89.8932037], {icon: greenIcon}).removeFrom(map);
}


// geojson = L.geoJson(markers, {
// style: style,
// onEachFeature: onEachFeature
// }).addTo(map);



//  L.geoJson(markers,{style: style,
   
//    pointToLayer: function (feature, latlng) {
//         return L.circleMarker(latlng, style(feature));
//       },

//       onEachFeature: onEachFeature
//   }).addTo(map);

// function getColor(d) {
//     return d === "SUGAR MAPLE" ? 'green' :
//            d === "ASPEN"  ? 'red' :
//                           "#0000" ;
// }

// function style(feature) {
//      return {
//         fillColor: getColor(feature.properties.SPECIES1),
       
//         opacity: 1,
//         color: myColor,        
//         fillOpacity: 0.0
//     };
// }




// function highlightFeature(e) {
//     var layer = e.target;
//     layer.setStyle({
//         weight: 5,
//         color: 'white',
//         dashArray: '',
//         fillOpacity: 0.7
//     });
    
//    //alert(layer.feature.properties.SPECIES1);
    
//    //if(layer.feature.properties.SPECIES1  == "ASPEN" && layer.feature.properties.classified == "ASPEN"){
//     if(layer.feature.properties.SPECIES1  == "ASPEN"){
//       var myObj = document.getElementById("yo");
//       myObj.style.background = "yellow"; // change color to red
//     }

   


//     if(layer.feature.properties.SPECIES1  == "RED PINE"){
//       var myObj = document.getElementById("hello");
//       myObj.style.background = "yellow"; // change color to red  
//     }
//         layer.bringToFront();

// }

// function resetHighlight(e) {
// geojson.resetStyle(e.target);

//      // var aspen = document.getElementById("yo");
//     var aspen = $('#yo').get(0);

//         aspen.style.background = "transparent"; 
//     var oak = document.getElementById("hello");
//         oak.style.background = "transparent";


// }


// function zoomToFeature(e) {
// map.fitBounds(e.target.getBounds());
// }


// function onEachFeature(feature, layer) {
// layer.on({
// mouseover: highlightFeature,
// mouseout: resetHighlight,
// click: zoomToFeature
// });
// }





//   /*var style = {
//     radius: 15,
//     color: "#000",
//     weight: 1,
//     opacity: .6,
//     fillOpacity: 0.0
//   };
// */


// // change the .Name to match the column in your CSV the same goes for description

 
// $('#yo').hover(function() {
//     $(this).css('background','red');
//     var species = layer.feature.properties.SPECIES1.ASPEN

//     alert(species)

// },
 
//  function() {
//     $(this).css('background', '');
// });