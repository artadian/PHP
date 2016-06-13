<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building and Construction Services</title>
<meta name="keywords" content="building, services, construction, green, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building and Construction Services - free website template for anyone." />
<link href="<?=base_url()?>styles/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_sidebar">
    	
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="<?=base_url()?>/styles/images/templatemo_logo.png" alt="building template" /><span>RENT BUILDING TAX</span></a></h1>
        </div> <!-- end of site_title -->
        
        <div id="login">
        	<h4>SuperUser Login</h4>
        	
			<?php echo form_open('rebut_cont/login');?>
                <label for="username">Username:</label> <input type="text" id="username" name="username" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Password:</label> <input type="password" id="password" name="password" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="submit" id="submit" value="Login" class="login_button" />
            	&nbsp;&nbsp;
        	
        </div>
        
    </div>

	<div id="templatemo_main_column">
    
    	<div id="templatemo_menu">
            <ul>
                <li><?php echo anchor('rebut_cont/index','01')?><span>Home</span></a></li>
                <li><?php echo anchor('rebut_cont/tax','02')?><span>Tax</span></a></li>
                <li><?php echo anchor('rebut_cont/event','03')?><span>Event</span></a></li>
                <li><?php echo anchor('rebut_cont/gallery','04')?><span>Gallery</span></a></li>
                <li><?php echo anchor('rebut_cont/contact','05')?><span>Contact</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
                
                <h2>Terima Kasih !</h2>
            <p>Terima Kasih, data anda sudah kami simpan<br />
						Gunakan nomor Identitas dan Nama Lengkap anda pada saat check in<br />
						Terima Kasih sudah memilih kami<br />
						Kepercayaan anda kebanggaan bagi kami<br /><br /></p>
			
			 <div class="cleaner_h30"></div>
			 <div class="cleaner"></div>
            <div class="cleaner_h30"></div>
        
            	
                
            </div>
        </div>
        
    </div>
    
    <div class="cleaner"></div>

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        <div id="company_logo">
        	<a href="http://www.templatemo.com"><img src="images/templatemo_logo_2.png" alt="logo" /></a>
        </div>
        
        <div id="copyright">
        	<?php echo anchor('rebut_cont/index','Home')?> | <?php echo anchor('rebut_cont/tax','Tax')?> | <?php echo anchor('rebut_cont/event','Event')?> | <?php echo anchor('rebut_cont/gallery','Gallery')?> | <?php echo anchor('rebut_cont/contact','Contact')?>
            <br /><br />
            
	        Copyright © 2013 <a href="http://www.joysoft.com">Joysoft Group</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>