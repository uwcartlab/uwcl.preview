 

// function GetActive ()
// { 
// var hope = e.target
// var test = hope.id
// alert (test)
// return test;
// }



// $("#yo").hover(function yo(s){
// $("#yo").css("background-color","yellow");
// var isHovered = $('#yo').is(":hover");
// if (isHovered === true){
// alert('ro')
// return isHovered
// }
// },


// var get = $("#yo").hover(yo(x))


// function(){

// $("#yo").css("background-color","transparent");
// var isHovered = $('#yo').is(":hover");
// alert(isHovered)
// }); 
// var s;
// var w = myFunction(s);
// alert(w)

// $(document).ready(function(){
//   $("p, button, h1").click(function(event){
//     $("div").html("Triggered by a " + event.target.nodeName + " element.");
//   });
// });

// function willdo(w)
// {

// 

// };

// function hillo(s){
//var person=prompt("Please enter your name","Harry Potter");
// function ret(d){



// if (person === 'conifer')
//   {
//   var hgg = 'conifer'
  
 
//   return hgg
//   } 

//   else{
// alert('try again')

//   }
// }


  // function GetActive (v) {
  //           if (document.activeElement) {
  //               var output = document.getElementById ("yo");
  //               var holder = document.activeElement.tagName;
                
  //             d = "RED MAPLE" 
  //           setColor(d)  
  //           }
  //       }
// </script>
// </head>
// <body>
// <input id="field1" onkeyup="getActvElem();"><br>
// <input id="field2" onkeyup="getActvElem();"><br>
// <input id="field3" onkeyup="getActvElem();">
// </body>
// </html>


///////////////////tester works///////////////////////////////////////
// function yo(y){
// var gg = "oak"
// return gg
// }



// function theFunc() {
// if (document.getElementById().

// var frf = document.getElementById("yo").onmouseover

// var ger = "now"


// return ger;
// }
 
// Make sure not to put parentheses after the function name on the following line





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


function setColor(w,r,d){
// alert(GetActive (w))

// // var person=prompt("Please enter your name","Harry Potter");
// var fer = ret(r)

// alert(person)
// var hello = myFunction(f);
// alert(hello)

  if (d === "CONIFEROUS FOREST" ) ){
         
     return 'blue'
 }         
  else {return "transparent"}                     
}

function setWeight(d) {

  if (d === "CONIFEROUS FOREST"){
         
     return '1'
 }         
  else {return "0"}                      
}





function style(feature) {
     return {
        fillColor: setColor(feature.properties.CATEGORY),
        weight: setWeight(feature.properties.CATEGORY),
        opacity: 1,
             
        fillOpacity: 1.0
    };
}




function highlightFeature(e) {
    var layer = e.target;
    layer.setStyle({
        weight: 5,
        color: 'white',
        dashArray: '',
        fillOpacity: 0.7
    });
    
   //alert(layer.feature.properties.SPECIES1);
    
   //if(layer.feature.properties.SPECIES1  == "ASPEN" && layer.feature.properties.classified == "ASPEN"){
    if(layer.feature.properties.SPECIES1  == "ASPEN"){
      var myObj = document.getElementById("yo");
      myObj.style.background = "yellow"; // change color to red
    }

   


    if(layer.feature.properties.SPECIES1  == "RED PINE"){
      var myObj = document.getElementById("hello");
      myObj.style.background = "yellow"; // change color to red  
    }
        layer.bringToFront();

}

function resetHighlight(e) {
geojson.resetStyle(e.target);

     // var aspen = document.getElementById("yo");
    var aspen = $('#yo').get(0);

        aspen.style.background = "transparent"; 
    var oak = document.getElementById("hello");
        oak.style.background = "transparent";


}


function zoomToFeature(e) {
map.fitBounds(e.target.getBounds());
}


function onEachFeature(feature, layer) {
layer.on({
click: highlightFeature,
mouseout: resetHighlight,
//
});
}

///table////////////////////////////////////
function on(x)
{
x.style.background="blue";




// var oak = document.getElementById("yo");


// oak.style.background = setStuff(document.getElementById("yo"));

}
function off(x)
{
x.style.background="transparent";


}



// function highlightFeatured(e) {
//     var layer = e.target;
//     layer.setStyle({
//         weight: 5,
//         color: 'white',
//         dashArray: '',
//         fillOpacity: 0.7
//     });







  /*var style = {
    radius: 15,
    color: "#000",
    weight: 1,
    opacity: .6,
    fillOpacity: 0.0
  };
*/


// change the .Name to match the column in your CSV the same goes for description

 
// $('#yo').hover(function() {
//     $(this).css('background','red');
   

// },
 
//  function() {
//     $(this).css('background', '');
// });