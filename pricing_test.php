<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>











        <link href="css/bizkitStyle.css" rel="stylesheet" type="text/css" /> 
         <link href="js/jquery-ui.css" rel="stylesheet" type="text/css" /> 


        <script type="text/javascript" src="js/jQuery.1.7.2.js" ></script>
        <!--<script type="text/javascript" src="js/jquery-ui.min.js" ></script>-->
        <script type="text/javascript" src="js/jQueryUI.1.8.21.js"></script>
       
        <script type="text/javascript" src="js/AccessibleSlide_1.js"></script>
        




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:93px;
	top:79px;
	width:317px;
	height:212px;
	z-index:1;
	background-color: #6F6;
}



 div { padding: 15px;}
  p { margin-left:10px; }
</style>






<style>

    #resizable { width: 150px; height: 150px; padding: 0.5em; top:150px; left: 120px;}
	
    #resizable h3 { text-align: center; margin: 0; }
	
	
	#wrapper{display: block; width: 1200px; height: 2500px;}
    </style>

  
    
    <script>
    $(function() {

        $("#resizable").resizable().draggable();
    });
	

	
	
 $(function() {
	
	// Make images draggable.
$(".item").draggable({

    // Find original position of dragged image.
    start: function(event, ui) {

    	// Show start dragged position of image.
    	var Startpos = $(this).position();
    	$("div#start").text("START: \nLeft: "+ Startpos.left + "\nTop: " + Startpos.top);
    },

    // Find position where image is dropped.
    stop: function(event, ui) {

    	// Show dropped position.
    	var Stoppos = $(this).position();
    	$("div#stop").text("STOP: \nLeft: "+ Stoppos.left + "\nTop: " + Stoppos.top);
    }
});


 });

    </script>






</head>

<body>

<div id="wrapper">



<div>
  <p>Hello</p>
</div>
<p></p>

<script>


/*
var pa = $("#resizable");
var position = pa.position();
$("p:last").text( "left: " + position.left + ", top: " + position.top );
*/

var p = $("#resizable");
var position = p.offset();
$("p:last").text( "left: " +  ", top: " );




/*
var ob = $("#resizable");
var position = ob.position();
$("#resizable").text( "left: " + position.left + ", top: " + position.top );

*/

</script>

<div id="input_form" class="ui-widget-content"></div>







<div id="back">

<div id="resizable" class="ui-widget-content item">
    <h3 class="ui-widget-header">Resizable</h3>
</div>
</div>













<div id="start">Waiting for dragging the image get started...</div>
<div id="stop">Waiting image getting dropped...</div>








</div>
</body>
</html>