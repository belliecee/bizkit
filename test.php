<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

     <!-- -->
   
        <link href="css/bizkitStyle.css" rel="stylesheet" type="text/css" /> 

        <script type="text/javascript" src="js/jQuery.1.7.2.js" ></script>
        <script type="text/javascript" src="js/jquery-ui.min.js" ></script>
        <script type="text/javascript" src="js/jQueryUI.1.8.21.js"></script>
       
        <script type="text/javascript" src="js/AccessibleSlide_1.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

		

<body>

 <?php  include("header.html"); ?>
 
  

     <div id="pricing_panel" class="centerGround">
     <div id="pricing_panel_mat">
        
              <div id="title_upgrade">
     			<p>Upgrade Your Account</p>
			  </div>
       
             
        	 <?php 
			 		
			
			       require('pricing_table.php');
		
			 ?> 
      
                  
             
       
              
               <?php 
			 		
			
			       require('pricing_form.php');
		
			 ?> 
              
              
        </div>
     </div>
     
    
     

<?php  include("footer.html"); ?>
</body>
</html>