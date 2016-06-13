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
        
        <!--<div id="login">
        	<h4>SuperUser Login</h4>
        	
			<?php echo form_open('rebut_cont/login');?>
                <label for="username">Username:</label> <input type="text" id="username" name="username" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Password:</label> <input type="password" id="password" name="password" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="submit" id="submit" value="Login" class="login_button" />
            	&nbsp;&nbsp;<a href="http://www.templatemo.com">forgot password?</a>
        	
        </div>-->
        
    </div>

	<div id="templatemo_main_column">
    
    	<div id="templatemo_menu">
            <ul>
                <li><?php echo anchor('rebut_cont/admingedung','01')?><span>CRUD Gedung</span></a></li>
                <li><?php echo anchor('rebut_cont/adminevent','02')?><span>CRUD Event</span></a></li>
                <li><?php echo anchor('rebut_cont/adminkalender','03')?><span>CRUD Kalender</span></a></li>
                <li><?php echo anchor('rebut_cont/adminlaporan','04')?><span>Crud Laporan</span></a></li>
                <li><?php echo anchor('rebut_cont/index','05')?><span>LOG OUT</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
                
                <?php echo form_open('rebut_cont/pros_editgedung');?>
<p align="center"><h1 align="center">EDIT GEDUNG</h1></p>
<?php
foreach($query as $row):echo form_hidden('id_gedung',$row->id_gedung,'id="id"'); ?>
<table align="center" id="tabel">
			<?php echo form_open_multipart('rebut_cont/prosestambahgedung');?>
        
			<tr>
			<td><?php echo form_label('Nama Gedung'); ?></td>
			<td><?php echo form_input('nama','','id="nama"'); ?></td>
			</tr>
			
			
			<tr>
			<td><?php echo form_label('Harga'); ?></td>
			<td><?php echo form_input('harga'); ?></td>
			</tr>
		
            <tr>
			<td><?php echo form_label('gambar');?></td>
            <td><input type="file" value name="userfile" size="20" /></td>
			</tr>
            
				
			<tr>
			<td><?php echo form_label('informasi'); ?></td>
			<td>
			 <?php 
					 $info = array(
     						 'name'        => 'inform',
      						 'rows'        => '10',
      						 'cols'        => '30',
     						 'style'       => 'width:50%',
    				);
					echo form_textarea($info); ?></td>
			</tr>
			
			<tr>
			<td><?php echo form_submit('submit','Edit Gedung', 'id="submit"');
			echo form_close();?></td>
			</tr>
						<?php endforeach;?>
					</table>
            
            
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