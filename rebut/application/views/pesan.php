<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building and Construction Services</title>
<meta name="keywords" content="building, services, construction, green, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building and Construction Services - free website template for anyone." />
<link href="<?=base_url()?>styles/templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>datepicker/datetimepicker_css.js"></script>
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_sidebar">
    	
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="<?=base_url()?>/styles/images/templatemo_logo.png" alt="building template" /><span>construction template</span></a></h1>
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
				 <?php
				 echo form_close();
				 ?>
        	
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
        	
            <h1 align="center">Calendar</h1>
								<table border="1" width="450" height="250" align="center" bgcolor="grey">
									<tr>
										<td align="center"><?php echo ($notes);?>
		<span> by Cemplux</span><br /><br />
		
	<script>
	$(function(){
		$(".act_note").colorbox({ 
				overlayClose: false,
				data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>}
		});
	});
</script></td>
									</tr>
								</table><br /><br /><br>
							
							<h1 align="center"> PEMESANAN </h1>
					<?php echo form_open('rebut_cont/pemesanan');?>
					<table border="0">
						<tr>
							<td>Nama</td><td>:</td><td><input type="text" size="50" name="nama"/></td>
						</tr>
						<tr>
							<td>No. Identitas</td><td>:</td><td><input type="text" size="25" name="identitas"/></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><input type="text" size="50" name="alamat"/></td>
						</tr>
						<tr>
							<td>Nama Gedung</td><td>:</td><td><select name="gedung">
                                <option value="Widyaloka">Widyaloka</option><option value="GOR Pertamina">GOR Pertamina</option><option value="Samantha Krida">Samantha Krida</option>
                            </select></td>
						</tr>
						
						<tr>
							<td>Tanggal Check In</td><td>:</td><td><input type="text" name="tanggal" id="ttl" size="20"/><a href="javascript:NewCssCal('ttl','yyyymmdd')">
<img src="<?php echo base_url(); ?>datepicker/images/cal.gif" width="16" height="16" alt="Pilih tanggal" />
</a></td>
						</tr>
						<tr>
							<td>Keperluan</td><td>:</td><td><input type="text" size="50" name="kepentingan"/></td>
						</tr>
						<tr>
							<td></td><td></td><td><input type="submit"  size="50" name="submit" value="Pesan Sekarang" align="right" /></td>
						</tr>
					</table>
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
        	<a href="index.html">Home</a> | <a href="about.html">Company</a> | <a href="services.html">Services</a> | 
            <a href="http://www.flashmo.com" target="_parent">Flash Templates</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a>
            <br /><br />
            
	        Copyright © 2048 <a href="#">Your Company Name</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>