z<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <li><?php echo anchor('rebut_cont/notes','03')?><span>CRUD Kalender</span></a></li>
                <li><?php echo anchor('rebut_cont/adminlaporan','04')?><span>Crud Laporan</span></a></li>
                <li><?php echo anchor('rebut_cont/index','05')?><span>LOG OUT</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
                
                <p align="center"><h1 align="center">DATA GEDUNG</h1></p>
<table border="1" align="center">
	<tr>
	<th>ID_Gedung</th>
	<th>Nama Gedung</th>
	<th>Harga Gedung</th>
	<th>Informasi Gedung</th>
	<th>Gambar</th>
	<th>Pilihan</th>
	</tr>
<?php 
foreach($query as $row):
	?>
	<?php echo"<tr>";?>
	
	<?php echo"<td>".$row->id_gedung."</td>";?>
	<?php echo"<td>".$row->nama_gedung."</td>";?>
	<?php echo"<td>".$row->harga_gedung."</td>";?>
	<?php echo"<td>".$row->informasi_gedung."</td>";?>
	<td><img src="<?php echo  base_url()."/styles/images/gedung/".$row->gambar_gedung; ?>" height="160px" width="160px" /> </td>
	
	<?php echo"<td>";?>
	<?php echo form_open('rebut_cont/hapusgedung');?>
	<?php echo form_hidden('id_gedung',$row->id_gedung,'id="id"');?>
	<?php echo form_submit('submit','Delete','id="submit"');?>
	<?php echo form_close();?>
	<?php echo form_open('rebut_cont/editgedung');?>
	<?php echo form_hidden('id',$row->id_gedung,'id="id"');?>
	<?php echo form_submit('submit','Edit','id="submit"');?>
	<?php echo form_close();?>
	<?php echo"</td>";?>
	<?php echo"</tr>";?>
	 

<?php

endforeach;
?>


</table>

<p align="center"><h1 align="center">TAMBAH GEDUNG</h1></p>
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
			<td><?php echo form_submit('submit','Tambahkan!', 'id="submit"');
			echo form_close();?></td>
			</tr>
            
			</table>
                <div class="cleaner"></div>
<!--<?php echo anchor('rebut_cont/tambahgedung','ADD')?>-->
            
            
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
        	<?php echo anchor('rebut_cont/admingedung','CRUD Gedung')?> | <?php echo anchor('rebut_cont/adminevent','CRUD Event')?> | <?php echo anchor('rebut_cont/notes','CRUD Kalender')?> | <?php echo anchor('rebut_cont/adminlaporan','CRUD Laporan')?> 
            <br /><br />
            
	        Copyright © 2013 <a href="#">Joysoft Group</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>