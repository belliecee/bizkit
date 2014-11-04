
$(document).ready(function(){

 /*************** DRAG and DROP ZONE *******************/ 
 /*
 $("#input_form").resizable().draggable();
 */
 
 /*************** End of DRAG and DROP ZONE *******************/
 
 /*
 $("#img-tryfree-button").mouseleave(function(){
     $(this).css({
           'background-image' : "url('../images/try_at_footer_hover.png')",
           'background-repeat': "no-repeat"
         
     });
 });
*/ 
 var blueglassStatus = 0;

$(".td1").click(function(){
			$("#input_form").fadeOut();
	
});
 
 $("#blueglass").mouseenter(function(){
 
    
		$('#blueglass').css({
			display : 'block'	
	    });

 });
 $("#blueglass").mouseleave(function(){
 
    
		$(this).css({
			display : 'none'	
	    });

 });
 /*    // Credit card information Input Field
 
 $("#blueglass").click(function(){
 
    
		
		$("#pricing_panel").delay(300).animate({
		     height : '1500'	
			
	    });
		$("#formContainer").delay(700).fadeIn(500);
		$(document).scrollTop(720,700);
		//$.scrollTo( '#footer_subwrapper', 800, {easing:'elasout'} );
		//$(document).scrollTop($('#formContainer').offset().top)

 });

 */
 
 
 $(".td2").mouseenter(function(){
 
      
		$('#blueglass').removeClass('blueglass_center');
		$('#blueglass').removeClass('blueglass_right');
		
		$('#blueglass').addClass('blueglass_left');
		$('#blueglass').css({
			display : 'block'
	    });
		
		
		

 });
 
 $(".td3").mouseenter(function(){
 
        $('#blueglass').removeClass('blueglass_left');
		$('#blueglass').removeClass('blueglass_right');
		
		$('#blueglass').addClass('blueglass_center');
		$('#blueglass').css({
			display : 'block'
	    });
 });
 $(".td4").mouseenter(function(){
 
        $('#blueglass').removeClass('blueglass_left');
		$('#blueglass').removeClass('blueglass_center');
		
		$('#blueglass').addClass('blueglass_right');
		$('#blueglass').css({
			display : 'block'
	    });
 });
 
 
 
 
 
 
 
 
 /* *******************  BIZKIT SLIDE ********************************** */
 
 var currentPosition = 0;
  var slideWidth = 1400;
  var slideHeight = 500;
  
  var slides = $('.slide');
  var numberOfSlides = slides.length;
  var playInterval = 10000;
  var timer;
  var controlButton;
  
  
  
  
  

  
  /* Add Control Button to Array*/

  var ctrlStr = "#img-control-button";
  var iniStr = ctrlStr+"1"; 
  $("#img-control-button1").addClass("img-control-button1_normal");
  $("#img-control-button2").addClass("img-control-button2_normal");
  $("#img-control-button3").addClass("img-control-button3_normal");
  $("#img-control-button1").addClass("img-control-button1_active");
  

  
  // Remove scrollbar in JS
  $('#slide_panel').css('overflow', 'hidden');
  
  // Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth,
      'height' : slideHeight,
      'color-background' : 'pink',
	  
      'z-index' : '10'
    });

      // Set #slideInner width equal to total width of all slides
      $('#slideInner').css('width', slideWidth * numberOfSlides)+100;
          // Insert controls in the DOM


      $('#slideshow')
            .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
            .append('<span class="control" id="rightControl">Clicking moves right</span>');

          // Hide left arrow control on first load
          
 
/*****************************************************************************************/
   
       setTimeout(runAutoplay,playInterval);

      // manageControls: Hides and Shows controls depending on currentPosition
      function manageControls(position){

        // Hide left arrow if position is first slide
        if(position==0){ $('#leftControl').show() } 
        else{ $('#leftControl').show()}
        if(position==numberOfSlides-1){ $('#rightControl').show() } else{ $('#rightControl').show() }

        if(position < 0 ) {return numberOfSlides-1}
        else if(position == numberOfSlides){return 0}
        else {return position}
      }	
      
      
      $('.control')
        .bind('mousedown', function(){
			
			// Keep Previous Position
			previousPosition = currentPosition;
			
            // Determine new position
             /* For left right button */
             /*
             currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
            */
             if($(this).attr('id') == 'img-control-button1'){ 
			 		currentPosition = 0;
					changeActiveButton(previousPosition);
					activateButton();
					
							
			 }
			 else if($(this).attr('id') == 'img-control-button2'){
				  currentPosition = 1;
				  changeActiveButton(previousPosition);
			      activateButton();
			 }
            else if($(this).attr('id') == 'img-control-button3'){
				currentPosition = 2;
				changeActiveButton(previousPosition);
			    activateButton();
			}
           
           
                // Hide / show controls
            /* currentPosition = manageControls(currentPosition);  ************/

            // Move slideInner using margin-left
            $('#slideInner').animate({
                'marginLeft' : slideWidth*(-currentPosition)

            });
            
            clearTimeout(timer);
            timer = setTimeout(runAutoplay,playInterval);
            
     });


     function changeActiveButton(previousPosition){
		 	if (previousPosition == 0)
			{
				$("#img-control-button1").removeClass("img-control-button1_active");
			
			}else if(previousPosition == 1){
				$("#img-control-button2").removeClass("img-control-button2_active");
				
				
			}else{
				$("#img-control-button3").removeClass("img-control-button3_active");
			}
		 
		 
	 }
	 function activateButton(){
		 	if (currentPosition == 0)
			{
				$("#img-control-button1").addClass("img-control-button1_active");
			
			}else if(currentPosition == 1){
				$("#img-control-button2").addClass("img-control-button2_active");
				
				
			}else if(currentPosition == 2){
				$("#img-control-button3").addClass("img-control-button3_active");
			}
		 
		 
	 }
	
     function autoplay(){
         
            currentPosition = currentPosition+1; 
           
            currentPosition = manageControls(currentPosition);
            $('#slideInner').animate({
                'marginLeft' : slideWidth*(-currentPosition)

            });
         
            return currentPosition;
          
      }
      
      
      function runAutoplay(){
		    var ord;
			var conStr;
			
            currentPostion = autoplay();
			/* String Process*/
			ord = (currentPosition+1).toString();
			conStr =   ctrlStr + ord;
		
			
			
			var conButt = $(conStr);
			if (currentPosition == 0)
			{
				$("#img-control-button1").addClass("img-control-button1_active");
				$("#img-control-button3").removeClass("img-control-button3_active");
			
			}else if(currentPosition == 1){
				$("#img-control-button2").addClass("img-control-button2_active");
				$("#img-control-button1").removeClass("img-control-button1_active");
				
				
			}else{
				$("#img-control-button3").addClass("img-control-button3_active");
				$("#img-control-button2").removeClass("img-control-button2_active");
			}
			
			
			
			
			
			
			 
            clearTimeout(timer);
            timer = setTimeout(runAutoplay,playInterval);
         
      }
     
      
        // Create event listeners for .controls clicks
    
	 /* ******************* END OF BIZKIT SLIDE ********************************** */


 });



  
