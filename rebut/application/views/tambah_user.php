<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building and Construction</title>
<meta name="keywords" content="building, construction, green, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building is a construction template that includes total 5 HTML pages." />
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
        	<form method="get" action="#">
                <label for="username">Username:</label> <input type="text" id="username" name="username" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Password:</label> <input type="password" id="password" name="password" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="submit" id="submit" value="Login" class="login_button" />
            	&nbsp;&nbsp;<a href="http://www.templatemo.com">forgot password?</a>
        	</form>
			<a class="login_blank" href="http://se.photohq.com" title="bilder"  target="_blank"></a>
        </div>
        
    </div>

	<div id="templatemo_main_column">
    
    	<div id="templatemo_menu">
            <ul>
                <li><a href="index.php" class="current">01<span>Home</span></a></li>
                <li><?php echo anchor('rebut_cont/event','02')?><span>Event</span></a></li>
                <li><?php echo anchor('rebut_cont/calendar','03')?><span>Calender</span></a></li>
                <li><?php echo anchor('rebut_cont/gallery','04')?><span>Gallery</span></a></li>
                <li><?php echo anchor('rebut_cont/contact','05')?><span>Contact</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
             <table align="center" id="tabel">
			<?php echo form_open('foto_controller/tambah_gedung');?>
        
			<tr>
			<td><?php echo form_label('Username'); ?></td>
			<td><?php echo form_input('judul','','id="judul"'); ?></td>
			</tr>
			
			
			<tr>
			<td><?php echo form_label('Passsword'); ?></td>
			<td><?php echo form_input('judul','','id="judul"'); ?></td>
			</tr>
		
       
				
			<tr>
			<td><?php echo form_label('Level'); ?></td>
			<td><?php echo form_input('judul','','id="judul"'); ?></td>
			</tr>
			
			<tr>
			<td><?php echo form_submit('submit','Tambahkan!', 'id="submit"');
			echo form_close();?></td>
			</tr>
            
			</table>
                <div class="cleaner"></div>
			</div>
            
            <div class="col_w315 float_l">
            	
                <div class="cleaner"></div>
               
            </div>
            
            <div class="col_w315 float_r">
            	
        </div>
        
    </div>
    
    <div class="cleaner"></div>

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        <div id="company_logo">
        	<a href="http://www.templatemo.com"><img src="images/joysoft_logo.jpg" alt="logo" width="173" height="82" /></a>
        </div>
        
        <div id="copyright">
        	<a href="index.html">Home</a> | <a href="about.html">Event</a> | <a href="services.html">Calendar</a> | 
            <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a>
            <br /><br />
            
	        Copyright © 2013 <a href="#">JoySoft</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='<?=base_url()?>styles/js/logging.js'></script>
</body>
</html>