



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


L.geoJson(conifer);


var coniferStyle = {
    'color': 'black',
    'weight': 5,
    'opacity': 0.6
};


