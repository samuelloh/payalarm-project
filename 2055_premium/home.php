	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayAlarm - Homepage</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="site_title"><h1><a href="#">PayAlarm</a></h1></div>
						<!-- NOTICE=IF ACCOUNT IS LOGGED IN, RETURN TO HOME, ELSE RETURN TO INDEX(LOGIN PAGE) -->

		
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="account.php"  class="withsub">Account</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                        <li><a href="#">Sub menu 4</a></li>
                        <li><a href="#" class="last">Sub menu 5</a></li>
                        <li><span class="bottom"></span></li>
                   </ul>
				   <li><a href="contact.php">About Us</a></li>
				   <li><a href="faq.html" target="_blank">FAQ</a></li>
              	</li>
            <br style="clear: left" />
        </div> <!-- END of menu -->
    </div> <!-- END of header-->

    <div id="tooplate_main_top"></div>
    <div id="tooplate_main">
        
        <div class="col two-third">
        	<div class="padding_right">
                <h2>Notifications and Updates</h2>
				
				<p> ***insert notifications and updates script pertaining to database here***</p>
			
	
				
                </div>
				<div class="cleaner"></div>
                        
            <div class="cleaner divider"></div>
           
            
        </div>
        
        <div class="col one_third no_margin_right">
            <h3>Services</h3>
            <ul class="tooplate_list">
            	<li><a href="#">Add new customer detail entry</a></li>
                <li><a href="#">Clear updates and notifications(add script to clear)</a></li>
                </ul>
            
            <div class="cleaner divider"></div>
            
            
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    <div id="tooplate_footer">
 
        <div class="col center">
        	<h4>Ask us anything!</h4>
          	<p>Contact us for enquiries at <a href="mailto:info@company.com">info@company.com</a></p>
			<br>	Copyright © 2017 PayAlarm</p>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of wrapper -->

</body>
</html>