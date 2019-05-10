
	function on_click(district){
		
		switch(district) {
				case "start":
					window.location ='#container';
					break;
				case "gz":
					map.setCenter(new google.maps.LatLng(23.1281,113.2511));
					map.setZoom(14);
					window.location ='#wrapper';
					break;
				case "yuexiu":	
					map.setCenter(new google.maps.LatLng(23.1264,113.2701));
					map.setZoom(15);
					window.location ='#wrapper';
					break;
				case "liwan":	
					map.setCenter(new google.maps.LatLng(23.1086,113.2401));
					map.setZoom(14);
					window.location ='#wrapper';
					break;
				case "panyu":	
					map.setCenter(new google.maps.LatLng(22.9552,113.3361));
					map.setZoom(13);
					window.location ='#wrapper';
					break;
				case "haizhu":	
					map.setCenter(new google.maps.LatLng(23.0958,113.2766));
					map.setZoom(14);
					window.location ='#wrapper';
					break;
				case "huadu":	
					map.setCenter(new google.maps.LatLng(23.4629,113.2233));
					map.setZoom(15);
					window.location ='#wrapper';
					break;
				case "huangpu":	
					map.setCenter(new google.maps.LatLng(23.0805,113.4961));
					map.setZoom(15);
					window.location ='#wrapper';
					break;
				case "zengcheng":	
					map.setCenter(new google.maps.LatLng(23.39642,113.8646));
					map.setZoom(14);
					window.location ='#wrapper';
					break;
				case "nansha":	
					map.setCenter(new google.maps.LatLng(22.7575,113.6206));
					map.setZoom(15);
					window.location ='#wrapper';
					break;
				case "baiyun":	
					map.setCenter(new google.maps.LatLng(23.1694,113.2943));
					map.setZoom(15);
					window.location ='#wrapper';
					break;
		}
	}