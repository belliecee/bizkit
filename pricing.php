<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


   
        <link href="css/bizkitStyle.css" rel="stylesheet" type="text/css" /> 

        <script type="text/javascript" src="js/jQuery.1.7.2.js" ></script>
        <script type="text/javascript" src="js/jquery-ui.min.js" ></script>
        <script type="text/javascript" src="js/jQueryUI.1.8.21.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
        <script type="text/javascript" src="js/AccessibleSlide_1.js"></script>
        
        


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
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
             <div id="formContainer">
             <div id="formContainer_mat">
              <?php 
             		 require('pricing_form.php');
			  ?> 
        

             </div>
             </div>
			 <form id="paypal_button" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="MANN6HMSB88GG">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose Your Plan">Choose Your Plan</td></tr><tr><td><select name="os0">
						<option value="Standar">Standar �700.00 THB</option>
						<option value="Medium">Medium �900.00 THB</option>
						<option value="Enterprise">Enterprise �1,200.00 THB</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="THB">
					<input type="image" src="https://www.paypalobjects.com/en_GB/TH/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>
			<Form id="paysbuy_button" method="post" action="https://www.paysbuy.com/paynow.aspx?lang=t">
			<input type="Hidden" Name="psb" value="psb"/>
					<input Type="Hidden" Name="biz" value="belliecee@gmail.com"/>
					<input Type="Hidden" Name="inv" value=""/>
					<input Type="Hidden" Name="itm" value="Pay for your plan"/>
					<input Type="Hidden" Name="amt" value="900"/>
					<input Type="Hidden" Name="postURL" value=""/>
					<input type="image" src="https://www.paysbuy.com/imgs/powerby3.jpg" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/>
			</Form >
                       
                        <Form id="paysbuy_button2" method="post" action="https://www.paysbuy.com/paynow.aspx?lang=t">
                        <input type="Hidden" Name="psb" value="psb"/>
                        <input Type="Hidden" Name="biz" value="c.l3ell@gmail.com"/>
                        <input Type="Hidden" Name="inv" value=""/>
                        <input Type="Hidden" Name="itm" value="Upgrade your plan"/>
                        <input Type="Hidden" Name="amt" value="1200"/>
                        <input Type="Hidden" Name="postURL" value=""/>
                        <input type="image" src="https://www.paysbuy.com/imgs/M_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/>
                        </Form >

        </div>
     </div>
     
    
     

<?php  include("footer.html"); ?>
</body>
</html>