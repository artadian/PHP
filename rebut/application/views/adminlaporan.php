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
                
                <p align="center"><h1 align="center">DATA LAPORAN</h1></p>
<table border="1" align="center">
	<tr>
	<th>ID Sewa</th>
	<th>Identitas Penyewa</th>
	<th>Nama Penyewa</th>
	<th>Alamat Penyewa</th>
	<th>Kepentingan</th>
	<th>Gedung</th>
	<th>Tanggal Peminjaman</th>
	<th>Harga Gedung</th>
	</tr>
<?php 
foreach($query as $row){
	echo"<tr>";
	echo"<td>".$row->id_sewa."</td>";
	echo"<td>".$row->identitas."</td>";
	echo"<td>".$row->nama."</td>";
	echo"<td>".$row->alamat."</td>";
	echo"<td>".$row->kepentingan."</td>";
	echo"<td>".$row->gedung."</td>";
	echo"<td>".$row->tanggal."</td>";
	echo"<td align='center'> Rp.".$row->harga_gedung."</td>";

	echo"</td>";
	echo"</tr>";
	 
}
?>
</table>
<br /><br />
<p align="center">
<?php echo form_open('rebut_cont/cetaklaporan');
	echo form_submit('submit','Print Laporan Sekarang','id="submit"');
	echo form_close();?>
   </p>         
            
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