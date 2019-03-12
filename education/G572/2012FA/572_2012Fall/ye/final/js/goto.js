
	function on_click(district){
		
		switch(district) {
				case "case01":

					//window.location ='#cs1';
					$('#cs2').css('display',"none");
					$('#cs3').css('display',"none");
					$('#cs1').css('display',"block");
					//$(.box).css('height',"600px");
					break;
				case "case02":	
					$('#cs1').css('display',"none");
					$('#cs3').css('display',"none");
					$('#cs2').css('display',"block");
					//$(.box).css('height',$('#cs2').height());
					//$(.box).css('height',"700px");
					//window.location ='#cs2';
					break;
				case "case03":	
					$('#cs1').css('display',"none");
					$('#cs2').css('display',"none");
					$('#cs3').css('display',"block");
					break;
				case "check01":
					var visSetting = (document.getElementById("radio-2-1").checked) ? "visible" : "hidden";
					var visSetting2 = (document.getElementById("radio-2-1").checked) ? "hidden" : "visible";
					document.getElementById("chg").style.visibility = visSetting;
					document.getElementById("test").style.visibility = visSetting2;
					document.getElementById("chgmap").style.visibility = visSetting2;
					break;
				case "check02":
					var visSetting = (document.getElementById("radio-2-2").checked) ? "visible" : "hidden";
					var visSetting2 = (document.getElementById("radio-2-2").checked) ? "hidden" : "visible";
					document.getElementById("test").style.visibility = visSetting;
					document.getElementById("chg").style.visibility = visSetting;
					document.getElementById("chgmap").style.visibility = visSetting2;
					break;
				case "check03":
					var visSetting = (document.getElementById("radio-2-3").checked) ? "visible" : "hidden";
					var visSetting2 = (document.getElementById("radio-2-3").checked) ? "hidden" : "visible";
					document.getElementById("test").style.visibility = visSetting;
					document.getElementById("chgmap").style.visibility = visSetting2;
					document.getElementById("chg").style.visibility = visSetting2;
					break;
				case "check04":
					var visSetting = (document.getElementById("radio-2-4").checked) ? "visible" : "hidden";
					var visSetting2 = (document.getElementById("radio-2-4").checked) ? "hidden" : "visible";
					document.getElementById("test").style.visibility = visSetting2;
					document.getElementById("chg").style.visibility = visSetting2;
					document.getElementById("chgmap").style.visibility = visSetting;
					break;
					
		}
	}