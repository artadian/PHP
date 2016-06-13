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
<script src="js/jquery.wgslider.js" type="text/javascript"></script>
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
           <li><?php echo anchor('foto_controller/index','Home');?></li>
           <li><?php echo anchor('foto_controller/tampilberita','HOT NEWS');?></li>
            <li><?php echo anchor('foto_controller/tampilportofolio','Portofolio');?></li>
            <li><?php echo anchor('foto_controller/tampilharga','Price List');?></li>    
            <li><?php echo anchor('foto_controller/booknow','Book Now');?></li>			        
             <li><?php echo anchor('foto_controller/tampilcontact','Contact Us');?></li>
        </ul>   
	</div> <!-- end of menu -->

	<div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
    
    	 <!-- end of a column -->
        
       
	   
        <div class="column_w540	 fl vl_divider">
        	
<table>

<form action="prosesbooking.php" method="POST" enctype="multipart/form-data">
		<tr>
			<td><font color="#CCCCCC">Nama :</td>
			<td><input type = "text" name="nama" required size = 35><font color='red'><b>*</b></font></td>
		</tr>
		<tr><td><font color="#CCCCCC">Alamat :</td>
			<td><textarea name = "alamat"  cols="20" rows="4"></textarea></td>
		</tr>
		<tr><td><font color="#CCCCCC">Email :</td>
			<td><input type="email" name="email" size = 35 ></td>
		</tr> 
		<tr><td><font color="#CCCCCC">Telepon	 :</td>
			<td><input type="text" name="telepon" size = 35></td>
		</tr>
		<tr><td><font color="#CCCCCC">Paket :</td>
			<td><font color="#CCCCCC"><select name="paket">
				<option value="belum milih" selected>-Silahkan Pilih Paket-</option>
				<option value="prewedding">Prewedding</option>
				<option value="wedding">Wedding</option>
				<option value="family">Family</option>
				<option value="group">Group</option>
				<option value="couple">Couple</option>
				<option value="profil">Profil</option>
				<option value="pas photo">Pas Photo</option>
				<option value="product">Product</option>
				<option value="wisuda">Wisuda</option>
				<option value="baby">Baby</option>
				</select></td>
		</tr>
		<tr><td><font color="#CCCCCC">Catatan :</td>
			<td><font color="#CCCCCC"><textarea name = "catatan"  cols="20" rows="4"></textarea></td>
		</tr>
		
					
		<tr><td><input type = "submit" value = "submit"></td>
		</tr>

		<tr>
			<td><font color="#CCCCCC"><a href="index.html">back</a></td>
		</tr>
</form>

</table>
        	<div class="cleaner"></div>        
        </div> <!-- end of a column -->
        
       <div class="column_w210 fl vl_divider" id="column_w920">
        
        	<div class="header_01">
            	Our Product
            </div>
            
	        <ul class="category_list">
           		<li><a href="#">Prewedding</a></li><br/>
                <li><a href="#">Personal</a></li><br/>
                <li><a href="#">Couple</a></li><br/>
                <li><a href="#">Baby</a></li><br/>
                <li><a href="#">Pas photo</a></li><br/>
                <li><a href="#">Year Book</a></li><br/>
                <li><a href="#">Liputan</a></li><br/>
    		</ul>
            
        
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