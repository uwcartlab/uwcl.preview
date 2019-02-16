<?php 

$totalslides = 20;

?>

<!DOCTYPE html>


<head>
<meta charset="UTF-8">
<title>Survey Graphic</title>

<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Lato:400,900,400italic);
@import url(style.css);

</style>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">



<script type="text/javascript">
<!--

		function jumpToHash(s) { 
		$('.slide').hide();
		$('#slide-' + s).show();
		window.location.hash = "#" + s;
		}
        
    	function rewriteSlideLabel(s) {
    	
    	$("#current-slide").html(s);
    	
    	if(s == 1) {
    	
    	$("#back-button").css("visibility", "hidden");
    	$("#forward-button").css("visibility", "visible");
    	
    	} else if(s == <?php echo $totalslides?>) {
    	
    	$("#back-button").css("visibility", "visible");
    	$("#forward-button").css("visibility", "hidden");
    	
    	} else {
    	
    	$("#back-button").css("visibility", "visible");
    	$("#forward-button").css("visibility", "visible");
    	
    	
    	}
    	
        
        }
        
        function initialize() {
    	
    	var h = window.location.hash;
    	
    	switch(h) {
    	
    	<?php
    	
    	$n = 1;
    	while($n <= $totalslides) {
    	
    	print 'case "#' . $n . '":';
    	print 'jumpToHash("' . $n . '");';
    	print 'rewriteSlideLabel("' . $n . '");';
    	print 'break;';    	
    	
    	$n++;
    	
    	}
    	
    	?>
    	
    	default:
    		jumpToHash("1");
    		rewriteSlideLabel("1");

    		break;
    	}
    
        }
        
  	function loadVideo() {
  	
  	var videoString = "<video width=\"480\" height=\"360\" class=\"video\" controls><source src=\"introduction.mp4\" type=\"video/mp4\"></video>";
  	$('#slide-2').html(videoString);
  	
  	}
//-->
</script>

</head>

<body onload="initialize();">


<div id="controls-outer">
<div id="controls-inner">
<div id="back-button"><img src="img/larr.png" alt="Back" height="24" width="30" /></div>
<div id="current-slide">1</div>
<div id="forward-button"><img src="img/rarr.png" alt="Forward" height="24" width="30" /></div>
</div>
</div>

<?php

$n = 1;
    	while($n <= $totalslides) {
    	
    	if($n == 2) { ?>
    	
    	
    	<div id="slide-2" class="slide" >
    	<img src="img/loadvideo.png" alt="Click to load video" width="480" height="360" class="video" onClick="loadVideo();" />

    	</div>
    	
    	<?php $n++; } elseif ($n == $totalslides) { 
    	?>
    	
    	<div id="slide-<?php echo $totalslides; ?>" class="slide backfill">
    	<div id="credits">
    	<h2>Acknowledgements</h2>
    	<p>This project was developed by <a href="http://people.matinic.us/garrett/">Garrett Dash Nelson</a> in December 2012 as a final project for Geography 572: Graphic Design in Cartography at the University of Wisconsin&ndash;Madison. <a href="http://www.geography.wisc.edu/faculty/roth/">Rob Roth</a> was the professor and <a href="http://situatedlaboratories.net">Rich Donohue</a> was the TA; in addition, all the course members provided valuable comments and developmental feedback.</p>
    	 
    	<p>The original material in this work is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 License</a>. Material from <i>Survey Graphic</i> which is under U.S. copyright is used here under fair use terms for scholarly work.</p>
    	<p>Further reading:</p>
    	<ul class="reading-list">
    	<li>Cara Finnegan, &ldquo;<a href="http://newdeal.feri.org/sg/essay.htm">Social Welfare and Visual Politics: The Story of Survey Graphic</a>,&rdquo; <i>New Deal Network</i>.
    	<li>Jordi Cat, &ldquo;<a href="http://plato.stanford.edu/entries/neurath/">Otto Neurath</a>,&rdquo; <i>Stanford Encyclopedia of Philosophy</i>, Ed. Edward N. Zalta (Winter 2011).</li>
    	<li><i><a href="http://isotyperevisited.org">Isotype Revisited</a></i>, University of Reading.</li>
    	</ul>
    	
    	<p>This site is <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fpeople.matinic.us%2Fgarrett%2Fmaps%2Fsurveygraphic%2F">HTML 5 Valid</a>. It looks best on a WebKit-based browser like Safari or Chrome.</p>
    	</div>
    	
    	</div>
    	
    	<?php
    	
    	$n++; } {
    	
    	
print "<div id=\"slide-" . $n . "\" class=\"slide\">";
print "<img src=\"img/slide-" . $n . ".png\" class=\"slide-image\" alt=\"Slide " . $n . "\" height=\"500\" width=\"900\" >";
print "</div>";

$n++;
}
    	}

?>



<script>
$( "#back-button" ).click(function() {
   var h = window.location.hash;
	var s = h.replace("#","");
	var n = parseInt(s) - 1 + '';
	if( s == 1 ) { } else {
    $( "#slide-" + s ).toggle( "drop", { direction: "right" }, 400 );
    $( "#slide-" + s ).promise().done(function(){
    $( "#slide-" + n ).toggle( "drop", { direction: "left" }, 400 ); });
    rewriteSlideLabel(n);
    window.location.hash = "#" + n;
    }
});

$( "#forward-button" ).click(function() {
	var h = window.location.hash;
	var s = h.replace("#","");
	var n = parseInt(s) + 1 + '';
	if( s == <?php echo $totalslides; ?> ) { } else {
    $( "#slide-" + s ).toggle( "drop", { direction: "left" }, 400 );
    $( "#slide-" + s ).promise().done(function(){
    $( "#slide-" + n ).toggle( "drop", { direction: "right" }, 400 ); });
    rewriteSlideLabel(n);
    window.location.hash = "#" + n;
    }
});



</script>
</body>



</html>