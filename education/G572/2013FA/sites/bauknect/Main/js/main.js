var coordnumber = 0;
var textNumber = 0;
var picNumber = 0;
mapbox.load('pbauknecht.gimn4jpb', function(o) {
    var map = mapbox.map('map');
    map.centerzoom({ lat: 0, lon: 0 }, 2);
    map.addLayer(o.layer);
   $(".back").click(function(){
	  if (coordnumber > 1) {
		coordnumber --;
		console.log(coordnumber);
	}
	map.ease.location({ lat: coords[coordnumber].lat, lon: coords[coordnumber].lon}).zoom(12).optimal([.3],1.42);
   })
   $(".forward").click(function(){
	 if (coordnumber < 7) {
		coordnumber ++;
		console.log(coordnumber);
	}
	map.ease.location({ lat: coords[coordnumber].lat, lon: coords[coordnumber].lon}).zoom(12).optimal([.3],1.42);
   })
   });

var coords = {
	"1" : {name : "Chimborazo", lat : "-1.46917", lon : "-78.8175"},
	"2" : {name : "Mount Hood", lat : "45.37361", lon : "-121.69583"},
	"3" : {name : "Nanda Devi", lat : "30.37583", lon : "79.97083"},
	"4" : {name : "Dhaulagiri", lat : "28.69833", lon : "83.4875"},
	"5" : {name : "Kanchenjunga", lat : "27.7025", lon : "88.14833"},
	"6" : {name : "Mount Everest", lat : "27.98806", lon : "86.92528"},
	"7" : {name : "K2", lat : "35.8825", lon : "76.51333"},
	"8" : {name : "Olympus Mons", lat: "0", lon : "0"}
};

var expressed = ["Main", "Chimborazo", "NandaDevi", "Dhaulagiri", "Kanchenjunga", "Everest", "Hood", "K2", "OlympusMons"];
//begin script when window loads
var textArray = {
	"1" : {name : "Chimborazo"},
	"2" : {name : "Hood"},
	"3" : {name : "NandaDevi"},
	"4" : {name : "Dhaulagiri"},
	"5" : {name : "Kanchenjunga"},
	"6" : {name : "Everest"},
	"7" : {name : "K2"},
	"8" : {name : "OlympusMons"}
};

var picArray = {
	"1" : {name : "Chimborazo"},
	"2" : {name : "Hood"},
	"3" : {name : "NandaDevi"},
	"4" : {name : "Dhaulagiri"},
	"5" : {name : "Kanchenjunga"},
	"6" : {name : "Everest"},
	"7" : {name : "K2"},
	"8" : {name : "OlympusMons"}
};

window.onload = initialize();
function initialize() {
	
	setMap();
	//processCSV();

	};

var markers = [{"type":"Feature","properties":{"ID":1,"Name":"Chimborazo"},"geometry":{"type":"Point","coordinates":[-78.8175,-1.46917]}},{"type":"Feature","properties":{"ID":2,"Name":"Nanda Devi"},"geometry":{"type":"Point","coordinates":[79.97083,30.37583]}},{"type":"Feature","properties":{"ID":3,"Name":"Dhaulagiri"},"geometry":{"type":"Point","coordinates":[83.4875,28.69833]}},{"type":"Feature","properties":{"ID":4,"Name":"Kanchenjunga"},"geometry":{"type":"Point","coordinates":[88.14833,27.7025]}},{"type":"Feature","properties":{"ID":5,"Name":"Mount Everest"},"geometry":{"type":"Point","coordinates":[86.92528,27.98806]}},{"type":"Feature","properties":{"ID":6,"Name":"Mount Hood"},"geometry":{"type":"Point","coordinates":[-121.69583,45.37361]}},{"type":"Feature","properties":{"ID":7,"Name":"K2"},"geometry":{"type":"Point","coordinates":[76.51333,35.8825]}},{"type":"Feature","properties":{"ID":8,"Name":"Olympus Mons"},"geometry":{"type":"Point","coordinates":[0.1,0.1]}}];
  var style = {
    radius: 5,
    color: "#000",
    weight: 1,
    opacity: .8,
    fillOpacity: 1
  };

  //L.geoJson(markers,{
  // pointToLayer: function (feature, latlng) {
  //      return L.circleMarker(latlng, style);
  //    },
  //}).addTo(map);

        
function setMap() {
	
    $('#text').load('text/Main.txt');
    //$('#picture').append('<img src = "img/EverestNight2.png">');
     
 

//        var map = L.mapbox.map('map', 'pbauknecht.ggh0jj01')
//	.setView([0, 0], 2);

	    
	$(".back").click(function(){
	back();
	});
	  
	$(".forward").click(function(){
	forward()
	});
	
	$(".back").mouseover(function (){
		$("#descend").show();
	});
      $(".back").mouseout(function (){
		$("#descend").hide();
	});
	$(".forward").mouseover(function (){
		$("#ascend").show();
	});
      $(".forward").mouseout(function (){
		$("#ascend").hide();
	});
};



function back(){
	if (textNumber > 1) {
		textNumber --;
	}
	if (picNumber > 1) {
		picNumber--;
	}
	$('#text').load('text/' + (textArray[textNumber].name) + '.txt')
	$('#picture').attr('src', "img/" + (picArray[picNumber].name) + ".jpg")
}

function forward(){
	if (picNumber < 8) {
		picNumber ++;
	}
	if (textNumber < 8) {
		textNumber ++;
	}
	$('#text').load('text/' + (textArray[textNumber].name) + '.txt');
	$('#picture').attr('src', "img/" + (picArray[picNumber].name) + ".jpg");


} 