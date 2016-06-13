<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="camera.png" />
<title>UP PHOTOGRAPHY</title>
<link href="<?php echo base_url();?>/a/css/desain.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<link href="<?php echo base_url();?>/a/css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>/a/js/jquery.wgslider.js" type="text/javascript"></script>
<body>
<div id="templatemo_container">
	<div id="templatemo_banner">
    	<div id="logo"></div>
        <!--  Free CSS Templates @ www.TemplateMo.com  -->
        <div id="search_section">
            <form action="#" method="get">
                <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div> 

    </div> <!-- end of banner -->
    
    <div id="templatemo_menu">
        <ul>
           <li><?php echo anchor('foto_controller/adminpage','Home');?></li>
           <li><?php echo anchor('foto_controller/tampilberita','HOT NEWS');?></li>
            <li><?php echo anchor('foto_controller/tampilportofolio','Portofolio');?></li>
            <li><?php echo anchor('foto_controller/tampilharga','Price List');?></li>    
           			        
            <li><?php echo anchor('foto_controller/tampil_contactus','Contact Us');?></li>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table align="right"><tr><td><?php echo anchor('foto_controller/logout','Logout	');?></td></tr></table>
		
        </ul>   
	</div> <!-- end of menu -->

	<div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
    
    	 <!-- end of a column -->
        
        <div class="column_w920">
		<div id="container">
	<table align="center" id="tabel">
			<?php echo form_open_multipart('foto_controller/tambahgambar');?>
        
			<tr>
			<td><?php echo form_label('Judul'); ?></td>
			<td><?php echo form_input('judul','','id="judul"'); ?></td>
			</tr>
		
            <tr>
			<td><?php echo form_label('gambar');?></td>
            <td><input type="file" value name="userfile" size="20" /></td>
			</tr>
            
			<tr>
			<td><?php echo form_label('Kategori'); ?></td>
			<td><select name="kategori">
				<option value="Prewedding" <?php echo set_select('kategori', 'prewedding'); ?> >prewedding</option>
				<option value="Couple" <?php echo set_select('kategori', 'couple'); ?> >couple</option>
				<option value="personal" <?php echo set_select('kategori', 'personal'); ?>>Personal</option>
				<option value="pas photo" <?php echo set_select('kategori', 'pas photo'); ?>>Pas Photo</option>
				<option value="liputan" <?php echo set_select('kategori', 'liputan'); ?>>liputan</option>
				<option value="year book" <?php echo set_select('kategori', 'year book'); ?>>Year Book</option>
				<option value="baby" <?php echo set_select('kategori', 'baby'); ?>>Baby</option>
			</select></td>
			</tr>
			
			<tr>
			<td><?php echo form_submit('submit','Tambahkan!', 'id="submit"');
			echo form_close();?></td>
			</tr>
            
			</table>
	</div>
		 </div>
       
        
       <div class="column_w210 fl vl_divider" id="column_w920">
        
        	<div class="header_01">
            
            </div>
            
	      
            
        
        	<div class="cleaner"></div>
        </div> <!-- end of a column -->
        
        <div class="margin_bottom_20 h_divider"></div>        
        <div class="margin_bottom_20"></div>
        
        
      
    
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
    
    <div id="templatemo_footer">
    
    <ul class="footer_list">
            <li><a href="#" class="current"><span></span>Home</a></li>
            <li><a href="#"><span></span>Portofolio</a></li>
            
            <li><a href="#"><span></span>Price List</a></li>            
            <li><a href="#"><span></span>About Us</a></li>
            <li><a href="#" class="last"><span></span>Contact Us</a></li>
        </ul> 
        
        <div class="margin_bottom_10"></div>
        
        Copyright © 2013<a href="#">Arta Dian Wicaksana</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
        <div class="margin_bottom_10"></div>
        
       
   	</div> <!-- end of footer -->
</div> <!-- end of container -->
<!--  Free CSS Template is provided by www.TemplateMo.com  -->
</body>
</html>