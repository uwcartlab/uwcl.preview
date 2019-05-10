  var isClicked = false;



// function cell1(w)
// {

// var hi = document.getElementById("cell1").id;
// var check = document.activeElement.id

// return hi
// }


// var howg = cell1()
// alert(howg)

   // change the set view section to match setting that you created in TileMill under the wrench icon .setView([lat, long], initial zoom level)
     // .setView([43.0760,-89.3816], 12).maxZoom(12);
    var map = L.map('map',{
    // change the set view section to match setting that you created in TileMill under the wrench icon 
      ////constrain how far they will be able to zoom into the map
      maxZoom: 14,
      minZoom: 10,
      
      //max bounds: [[southLat,westLong],[northLat,eastLong]]
      //TileMill Set bounds box:  westLong,southLat,eastLong,northLat  
      //example this from tile mill go to the below example -89.5142,42.9715,-89.2354,43.1541 
       maxBounds:[ [43.1060,-90.3687],[43.6848,-89.5282]]
    // .setView([center], zoom); // .setView([lat, long], initalZoom level)
    }).setView([ 43.4141,-89.9279], 10);

 
      
  L.tileLayer(
  //change the tile set to point to your tiles. After the v/3 insert the name of your mapbox account and id of tiles. 'http://a.tiles.mapbox.com/v3/YOUR_TILE_NAME/{z}/{x}/{y}.png')
  'http://a.tiles.mapbox.com/v3/bianchi76.matt/{z}/{x}/{y}.png',{
  
     // beetwen the '' incert the name and links to all of your data sources. use <a> tags to link to websites as needed
     attribution: 'Made with: <a href="http://mapbox.com">TileMill</a> Map data: <a href="http://dnr.wi.gov/maps/gis/metadata.html">Wisconsin DNR</a>'
  }).addTo(map);




var info = L.control();
info.onAdd = function (map) {
this._div = L.DomUtil.create('div', 'info');
return this._div;
};




geojson = L.geoJson(markers,{style: style,
   
   pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, style(feature));
      },

      onEachFeature: onEachFeature
  }).addTo(map);




function setColorDD(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'yellow'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "DECIDUOUS FOREST" && t === true){
         
     return 'yellow';
 }         
  return "transparent"                   
}

function setColorCC(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'yellow'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "CONIFEROUS FOREST" && t === true){
         
     return 'blue';
 }         
  return "transparent"                   
}

function setColorDC(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'red'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "CONIFEROUS FOREST" && t === true){
         
     return 'blue';
 }         
  return "transparent"                   
}

function setColorCD(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'red'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "CONIFEROUS FOREST" && t === true){
         
     return 'blue';
 }         
  return "transparent"                   
}


function setColorWW(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'yellow'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "WETLAND" && t === true){
         
     return 'yellow';
 }         
  return "transparent"                   
}




  function setColorCW(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'red'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "WETLAND" && t === true){
         
     return 'red';
 }         
  return "transparent"                   
}

function setColorDW(D,d,isD,isd) {
    



    if (D === isD){
      if (d ===isd){

        return 'red'
      }
         
     return 'transparent';
 }         
  return "transparent"                   
}

function resetColor(D,t) {
    if (D === "WETLAND" && t === true){
         
     return 'red';
 }         
  return "transparent"                   
}

   
///////////stop///////////////////////
function setWeight(d) {
  if (d === "DECIDUOUS FOREST"){
         
     return '1';
 }         
  else {return "0"}                      
}


function style(feature) {
     return {
        fillColor:"transparent",
        weight: setWeight(feature.properties.CATEGORY),
        opacity: 1,
         weight: 1,
        color:"transparent",   
        fillOpacity: 0.7
    };
}




function highlightFeature(e) {
    var layer = e.target;
    layer.setStyle({
        weight: 5,
        color: 'white',
        dashArray: '',
        fillOpacity: 0.0
    });
    
   //alert(layer.feature.properties.SPECIES1);
    
   //if(layer.feature.properties.SPECIES1  == "ASPEN" && layer.feature.properties.classified == "ASPEN"){
    if(layer.feature.properties.CATEGORY == "DECIDUOUS FOREST"){
      var myObj = document.getElementById("CC");
      myObj.style.background = "blue"; // change color to red
    }

   


    if(layer.feature.properties.CATEGORY  == "CONIFEROUS FOREST" && layer.feature.properties.LANDTYPE  == "DECIDUOUS FOREST"){
      var myObj = document.getElementById("CD");
      myObj.style.background = "blue"; // change color to red  
    }
        layer.bringToFront();

}

function resetHighlight(e) {
geojson.resetStyle(e.target);

     // var aspen = document.getElementById("yo");
    var aspen = $('#CD').get(0);

        aspen.style.background = "transparent"; 
    var oak = document.getElementById("hello");
        oak.style.background = "transparent";


}


function zoomToFeature(e) {
map.fitBounds(e.target.getBounds());
}


function onEachFeature(feature, layer) {
layer.on({
mouseover: highlightFeature,
mouseout: resetHighlight,
click: zoomToFeature
});
}

///table////////////////////////////////////
function bigImg(x)
{

x.style.background="blue";
markers.feature.properties.SPECIES1.ASPEN.style.weight = 4;
}
function normalImg(x)
{
x.style.background="transparent";


}




// var ddd = "dog"
// if (ddd === "dog"){
// var exteriorMaskLayer = L.geoJson(markers,{style: exteriorStyle,
   
//    pointToLayer: function (feature, latlng) {
//         return L.circleMarker(latlng, style(feature));
//       },

//       onEachFeature: onEachFeature
//   }).addTo(map);
// }

 


var buttons = document.getElementsByTagName('button');
var iframes = document.getElementsByTagName('iframe');

for(i = 0; i < buttons.length; i++){
    
    buttons[i].onclick = function high(v){
        var link = this.value; 
        
        iframes[0].src = link;
         
}
}     

$('#DD').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorDD(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "DECIDUOUS FOREST","DECIDUOUS FOREST")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }

 //place 
  
});

// conifer/confier////////////////////////////////////////////////////////

$('.CC').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorCC(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "CONIFEROUS FOREST","CONIFEROUS FOREST")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});


 //decidous/conifer//////////////////////////////////////////////////////

$('#DC').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 
  
      layer.setStyle({
            fillColor: setColorDC(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "DECIDUOUS FOREST","CONIFEROUS FOREST")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});


//conifer/deciduous/////////////////////////////////////////////////////


$('#CD').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorCD(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "CONIFEROUS FOREST","DECIDUOUS FOREST")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});


//wetland/wetlands/////////////////////////////////////////////////////


$('#WW').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorWW(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "WETLAND","WETLAND")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});

//wconifer/wetland/////////////////////////////////////////////////////

$('#CW').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorCW(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "CONIFEROUS FOREST","WETLAND")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});
//decidoues/wetland/////////////////////////////////////////////////////

$('#DW').click(function(){
   if(isClicked === true){
   geojson.eachLayer(function(layer){ 

    layer.setStyle({
          fillColor: "transparent"
        })
      })
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    geojson.eachLayer(function(layer){ 

      layer.setStyle({
            fillColor: setColorDW(
            layer.feature.properties.CATEGORY, layer.feature.properties.LANDTYPE, "DECIDUOUS FOREST","WETLAND")
          })
    })
  isClicked = true;
  console.log(isClicked);
  }


  
});




function onEachFeature (feature, layer){
    var popUpInfo = "<p style='font-family:arial;color:grey;font-size:15px;''> GROUND TRUTH: "+ layer.feature.properties.CATEGORY+ "</p>"+ "<p style='font-family:arial;color:grey;font-size:15px;''>LANDTYPE: " + layer.feature.properties.LANDTYPE + "</p>";

    if(feature.properties && feature.properties.popUpInfo){
      popUpInfo += feature.properties.popUpInfo;
    }
    layer.bindPopup(popUpInfo);
  }



$('.correct').click(function(){
   if(isClicked === true){
   
    $('.CC').css({"background-color":"yellow"});
  isClicked = false;

  console.log(isClicked);
  } 

  else {
    $('.CC').css({"background-color":"blue"}); 
  isClicked = true;
  console.log(isClicked);
  }


  
});
// change the .Name to match the column in your CSV the same goes for description

 
// $('#yo').hover(function() {
//     $(this).css('background','red');
   

// },
 
//  function() {
//     $(this).css('background', '');
// });


  <!--



