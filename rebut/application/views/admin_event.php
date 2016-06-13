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
                <li><?php echo anchor('rebut_cont/notes','03')?><span>CRUD Kalender</span></a></li>
                <li><?php echo anchor('rebut_cont/adminlaporan','04')?><span>Crud Laporan</span></a></li>
                <li><?php echo anchor('rebut_cont/index','05')?><span>LOG OUT</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
                
                <p align="center"><h1 align="center">DATA EVENT</h1></p>
<table border="1" align="center">
	<tr>
	<th>No.</th>
	<th>ID Event</th>
	<th>Judul</th>
	<th>Content</th>
	<th>Tanggal Tulis</th>
	<th>Ditulis Oleh</th>
	</tr>
<?php $i=0;
foreach($query as $row){
	$i++;
	echo"<tr>";
	echo"<td>".$i."</td>";
	echo"<td>".$row->id_event."</td>";
	echo"<td>".$row->judul_event."</td>";
	echo"<td>".$row->isi_event."</td>";
	echo"<td>".$row->tanggal_event."</td>";
	echo"<td>".$row->post_by."</td>";
	echo form_close();
	echo"<td>";
	echo form_open('rebut_cont/hapusevent');
	echo form_hidden('id_event',$row->id_event,'id="id"');
	echo form_submit('submit','Delete','id=submit');
	echo form_close();
	echo form_open('rebut_cont/editevent');
	echo form_hidden('id',$row->id_event,'id="id"');
	echo form_submit('submit','Edit','id="submit"');
	echo form_close();
	echo"</td>";
	echo"</tr>";
	 
}
?>

</table>
<p align="center"><h1 align="center">TAMBAH EVENT</h1></p>
<?php echo form_open('rebut_cont/tambahevent');?>
					<table border="0">
						<tr>
							<td>Judul</td><td>:</td><td><input type="text" size="50" name="judul"/></td>
						</tr>
						<tr>
							<td><?php echo form_label('Konten Event'); ?></td>
							<td>:</td>
							<td>
			 <?php 
					 $info = array(
     						 'name'        => 'isi',
      						 'rows'        => '5',
      						 'cols'        => '120',
     						 'style'       => 'width:50%',
    				);
					echo form_textarea($info); ?></td>
						</tr>
						
						<tr>
							<td>Tanggal Posting</td><td>:</td><td><input type="text" name="tanggal" id="ttl" size="20"/><a href="javascript:NewCssCal('ttl','yyyymmdd')">
<img src="<?php echo base_url(); ?>datepicker/images/cal.gif" width="16" height="16" alt="Pilih tanggal" />
</a></td>
						</tr>
						<tr>
							<td>Diposting Oleh</td><td>:</td><td><input type="text" size="20" name="oleh"/></td>
						</tr>
						<tr>
							<td></td><td></td><td><input type="submit"  size="50" name="submit" value="Tambah Event" align="right" /></td>
						</tr>
					</table>
<!--<table align="center" id="tabel">
			<?php echo form_open('rebut_cont/prosestambahevent');?>
        
			<tr>
			<td><?php echo form_label('Judul Event'); ?></td>
			<td><?php echo form_input('judul'); ?></td>
			</tr>
			
			
			<tr>
			<td><?php echo form_label('tanggal *pake datepicker*'); ?></td>
			<TD><input type="text" name="tanggal" id="ttl" size="20"/><a href="javascript:NewCssCal('ttl','yyyymmdd')">
<img src="<?php echo base_url(); ?>datepicker/images/cal.gif" width="16" height="16" alt="Pilih tanggal" /></TD>
			</tr>
			
			
			<tr>
			<td><?php echo form_label('isi_event'); ?></td>
			<td><?php echo form_input('isi'); ?></td>
			</tr>
		
              				
			<tr>
			<td><?php echo form_label('post by'); ?></td>
			<td><?php echo form_input('by','','id="username"'); ?></td>
			</tr>
			
			<tr>
			<td><?php echo form_submit('submit','Tambahkan!', 'id="submit"');
			echo form_close();?></td>
			</tr>
            
			</table>-->
            
            
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